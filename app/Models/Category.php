<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Menghubungkan satu kategori ke banyak produk (One-to-Many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}