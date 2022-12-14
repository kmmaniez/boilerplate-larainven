<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id_kategori',
        'nama_produk',
        'harga_produk',
        'stok',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
