<?php

namespace App\Http\Controllers;


class CartController extends Controller{

    public function AddCart(){
        return view('front.Cart');
    }

}