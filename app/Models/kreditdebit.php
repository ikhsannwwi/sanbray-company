<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;


class kreditdebit extends Model
{
    use HasFactory,LogsActivity;

    protected $guarded = ['id'];

    public function nama_produk(){
        return $this->belongsTo(nama__produk::class , 'id_barang');
    }
}
