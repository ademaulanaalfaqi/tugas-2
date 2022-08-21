<?php

namespace App\Http\Controllers;

class AdminController extends Controller {

    function showAdmin(){
        return view('admin');
    }

    function showDashboard(){
        return view('admin/dashboard');
    }

    function showProduk(){
        return view('admin/produk');
    }

    function showKategori(){
        return view('admin/kategori');
    }

    function showPromo(){
        return view('admin/promo');
    }

    function showPelanggan(){
        return view('admin/pelanggan');
    }

    function showSupplier(){
        return view('admin/supplier');
    }

    
}

?>