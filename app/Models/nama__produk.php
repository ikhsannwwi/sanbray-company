<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;




class nama__produk extends Model
{
    use HasFactory,LogsActivity;

    protected static $logName = 'nama produk';

    protected static $logAttributes = ['jenis_produk', 'slug'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Kamu melakukan {$eventName} pada data nama produk";
    }

    protected $guarded = ['id'];

    public function jenis_produk(){
        return $this->belongsTo(jenis__produk::class , 'id_jenis_produk');
    }

    public function stok_produk(){
        return $this->hasMany(stok_produk::class, 'id_nama_produk','id');
    }
}
