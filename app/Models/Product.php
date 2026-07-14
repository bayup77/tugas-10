<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Menghubungkan produk ke satu kategori (Belongs-To)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}