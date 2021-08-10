<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}
