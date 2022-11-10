<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category seeder
        $category = ['Baju','Celana','Hoodie','Jacket','Sepatu'];
        for ($i=0; $i < count($category) ; $i++) { 
            \App\Models\Category::factory()->create([
                'nama_kategori' => $category[$i]
            ]);
        }

        // Products seeder
        $products = ['Baju muslim','Celana chinos','Hoodie P&B','Jacket Varsitiy','Converse'];
        for ($i=0; $i < count($category); $i++) { 
            \App\Models\Product::factory()->create([
                'id_kategori' => $i + 1,
                'nama_produk' => $products[$i],
                'harga_produk' => rand(2,6) * 3500,
                'stok' => rand(5,20),
            ]);
        }
    }
}
