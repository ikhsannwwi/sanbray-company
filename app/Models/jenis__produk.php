<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis__produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function nama_produk(){
        return $this->hasMany(nama__produk::class ,'id');
    }
}
