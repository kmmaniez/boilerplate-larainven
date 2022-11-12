<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Category extends Model
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama_kategori'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
