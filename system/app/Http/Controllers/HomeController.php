<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    function showLanding(){
        return view('landing/landing');
    }

    function showProduct(){
        return view('landing/product');
    }

    function showCategory(){
        return view('landing/category');
    }

    function showDetail(){
        return view('landing/produk-detail');
    }
}