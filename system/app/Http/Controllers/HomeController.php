<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller{
    function showLanding(){
        $data ['list_produk'] = Produk::all();
        return view('landing/landing', $data);
    }

    function showProduct(){
        $data ['list_produk'] = Produk::all();
        return view('landing/product', $data);
    }

    function showCategory(){
        return view('landing/category');
    }

    function showDetail(){
        return view('landing/produk-detail');
    }

    function filter(){
        $nama = request('nama');
        $data ['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data ['nama'] = $nama;
        return view('landing/product', $data);
    }
}