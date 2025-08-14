<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Pagination\Paginator;


class ProductController extends Controller{

    public function index(){
        $products=product::with('user')->paginate(8);
        // $products=product::with('user')->get();
        // $products=product::paginate(8);
        // dd($products);
        return view('front.products',['products'=>$products]);
    }
    public function show($id){
        $product= product::findOrFail($id);
        $products= product::inRandomOrder()->take(4)->get();
        return view('front.productdetails',['product'=>$product],['products'=>$products]);
     
    }

}