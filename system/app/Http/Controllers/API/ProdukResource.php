<?php

namespace App\Http\Controllers\API;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_produk = Produk::all();
        return $list_produk->toJson();
    }

    public function store(Request $request)
    {
        if(request('nama') && request('harga') && request('berat') && request('stok') && request('deskripsi')){

            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->harga = request('harga');
            $produk->berat = request('berat');
            $produk->stok = request('stok');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);

        } else {
            return collect([
                'respon' => 500,
                'message' =>  "Field ada yang kosong"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk){
            return collect([
                'status' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $produk = Produk::find($id);
        if($produk){

            $produk->nama = request('nama') ?? $produk->nama;
            return request()->all();
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->stok = request('stok') ?? $produk->stok;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);
        }
        return collect([
            'respond' => 500,
            'message' => "Produk tidak ditemukan"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
