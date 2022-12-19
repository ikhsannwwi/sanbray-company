<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;


class pendistribusian extends Model
{
    use HasFactory,LogsActivity;

    protected static $logName = 'pendistribusian';

    protected static $logAttributes = ['jenis_produk', 'slug'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Kamu melakukan {$eventName} pada data pendistribusian";
    }

    protected $guarded = ['id'];

    public function nama_produk(){
        return $this->belongsTo(nama__produk::class , 'id_barang');
    }
    public function tempat_distribusi(){
        return $this->belongsTo(tempat__distribusi::class , 'id_tempat_distribusi');
    }
    public function harga_jual(){
        return $this->belongsTo(harga__jual::class , 'id_harga_jual');
    }
}
