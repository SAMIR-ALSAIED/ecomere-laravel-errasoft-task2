<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;



class HomeController  extends Controller{

    public function index(){

        $products=product::paginate(8);

    return view('front.index',['products'=>$products]);

    }

    public function sendMassage(Request $request){
        $data= $request->validate([
            
            "Name"=>['required','min:2'],
            "email"=>'required',
            "massage"=>'required',
            

        ]);
        // $data=$request->all();
        // dd($data);
        // dd($data);
        $massage= new Massage();

        $massage->Name= $data['Name'];
        $massage->email= $data['email'];
        $massage->massage= $data['massage'];
        $massage->save();
        return back()->with('succes',"data insreted succesfuly");

    }

}