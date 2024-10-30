<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function Produk()
    {
        return $this->hasMany(Produk::class, 'produkID', 'id');
    }
}
