<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function index(){
        // return Product::all();
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    function search(Request $req){
        // return $req->input();
        $term = $req->input('term');
        $data = Product::where('name','like','%'.$term.'%')->get();
        // return $data;
        return view('search',['term'=>$data]);
    }
    function section(Request $req){
        $category = $req->input('section');
        $data = Product::where('section',$category)->get();
        return view('category',['data'=>$data]); 
    }
    function add_to_cart(Request $req){
        if($req->session()->has('user')){
            
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/cartlist');
        }else{
            return redirect('/login');
        }

    }

    static function cartItem(){
        if(Session::has('user')){
            $userID = Session::get('user')['id'];
            return Cart::where('user_id', $userID)->count();

        }else{
            return 0;
        }
    }

    function cartList(){
        if(Session::has('user')){

            $userID = Session::get('user')['id'];
            $delivery = 500;
            $products = DB::table('cart')->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id', $userID)
            ->select('products.*','cart.id as cartId')
            ->get();
            $total =  DB::table('cart')->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id', $userID)
            ->sum('products.price');
    
            return view('cartList')
            ->with('products',$products)
            ->with('delivery',$delivery)
            ->with('total',$total);
        }else{
            return redirect('login');
        }


    }
    function removeItem($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(Request $req){
        if(Session::has('user')){

                $total = $req->total;
                $delivery = $req->delivery;
                // $userID = Session::get('user')['id'];
                // $delivery = 500;
                // $total = $products = DB::table('cart')->join('products','cart.product_id','=','products.id')
                // ->where('cart.user_id', $userID)
                // ->sum('products.price');
    
                return view('ordernow')->with('total',$total)->with('delivery', $delivery);
        }else{
            return redirect('login');
        }
    }

    function processPayment(Request $req){
        $userID = Session::get('user')['id'];
        // return $req->input();
        $address = 'Name: '.$req->name.' Address: '.$req->address.' Pincode: '.$req->pincode.
        ' Contact: '.$req->phone;

        $cartItems = Cart::where('user_id',$userID)->get();
        foreach($cartItems as $item){
            $order = new Order;
            $order->product_id = $item['product_id'];
            $order->user_id = $item['user_id'];
            $order->payment_method = $req->payment;
            $order->status = "pending";
            $order->payment_status = "pending";
            $order->address =$address;
            $order->save();
            Cart::where('user_id',$userID)->delete();
        }
        
        return redirect('/');   
    }
    function myOrders(){
        $userID = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id', $userID)
            ->get();

        return view('myorders',['orders'=>$orders]);
    }
}
