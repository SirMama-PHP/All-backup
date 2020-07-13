<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    function FrontPage(){
        $product = Product::limit(8)->get();
        return view('frontend.main',compact('product'));       
    }

    function single_product($slug){
        $product = Product::where('slug',$slug)->first();
        return view('frontend.single_product',compact('product'));
    }
}
