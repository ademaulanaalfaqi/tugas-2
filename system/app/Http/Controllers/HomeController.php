<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller{
    function showLanding(){
        $data ['list_produk'] = Produk::all();
        return view('landing/landing', $data);
    }

    function showProduct(){
        $data ['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::paginate(12);
        return view('landing/product', $data);
    }

    function showCategory(){
        return view('landing/category');
    }

    function showDetail(Produk $produk){
        $list_produk = Produk::all();
        $data['list_produk'] = $list_produk;
        $data ['produk'] = $produk;
        return view('landing/produk-detail', $data);
    }

    function filter(){
        $nama = request('nama');
        $data ['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data ['nama'] = $nama;
        return view('landing/product', $data);
    }

    function testCollection(){
        $list_hp = ['xiaomi', 'oppo', 'iphone', 'samsung', 'vivo'];
        $collection = collect($list_hp);
        $list_produk = Produk::all();

        
        return view('test-collection', $list_hp);
        
    }

    function showCheckout(){
        $data['list_provinsi'] = Provinsi::all();
        return view('checkout', $data);
    }

    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }

}