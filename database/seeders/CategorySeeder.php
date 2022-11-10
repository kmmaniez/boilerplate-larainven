<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Baju','Celana','Hoodie','Jacket','Sepatu'];
        for ($i=0; $i < count($category) ; $i++) { 
            \App\Models\Category::factory()->create([
                'nama_kategori' => $category[$i]
            ]);
        }
    }
}
