<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
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
        $userID = Session::get('user')['id'];
        return Cart::where('user_id', $userID)->count();
    }

    function cartList(){
        $userID = Session::get('user')['id'];
        $products = DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userID)
        ->select('products.*','cart.id as cartId')
        ->get();

        return view('cartList',['products'=>$products]);

    }
    function removeItem($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

}
