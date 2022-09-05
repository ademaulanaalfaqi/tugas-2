<?php

namespace App\Models;

use App\Models\User;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class Produk extends Model{
    protected $table = 'produk';

    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'
    ];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }

    function getHargaStringAttribute(){
        return "Rp. ".number_format($this->attributes['harga']);
    }

    function getTanggalProduksiAttribute(){
        $tanggal = $this->created_at;
        return strftime("%d %B %Y", strtotime($this->created_at));
    }
}