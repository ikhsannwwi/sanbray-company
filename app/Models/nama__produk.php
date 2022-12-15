<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class nama__produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jenis_produk(){
        return $this->belongsTo(jenis__produk::class , 'id_jenis_produk');
    }
}
