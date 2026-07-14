<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 1 User dummy
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 2. Buat Kategori dummy
        $kategoriElektronik = Category::create(['name' => 'Elektronik']);
        $kategoriPakaian = Category::create(['name' => 'Pakaian']);

    // 3. Buat Produk dummy
        Product::create([
            'name' => 'Laptop Gaming',
            'image' => 'https://picsum.photos/seed/laptop/400/300', // Gambar acak dari Picsum
            'description' => 'Laptop kencang untuk main game dan coding.',
            'stock' => 10,
            'price' => 15000000,
            'category_id' => $kategoriElektronik->id
        ]);

        Product::create([
            'name' => 'Kaos Polos',
            'image' => 'https://picsum.photos/seed/baju/400/300', // Gambar acak dari Picsum
            'description' => 'Kaos bahan katun yang nyaman dipakai.',
            'stock' => 50,
            'price' => 100000,
            'category_id' => $kategoriPakaian->id
        ]);

        Product::create([
            'name' => 'Kaos Polos',
            'description' => 'Kaos bahan katun yang nyaman dipakai.',
            'stock' => 50,
            'price' => 100000,
            'category_id' => $kategoriPakaian->id
        ]);
    }
}