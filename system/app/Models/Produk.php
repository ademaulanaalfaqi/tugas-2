<?php

namespace App\Models;

use App\Models\User;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

use League\CommonMark\Extension\Attributes\Node\Attributes;

class Produk extends Model{

    use ProdukAttributes, ProdukRelations;

    protected $table = 'produk';

    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'
    ];

    

    
}