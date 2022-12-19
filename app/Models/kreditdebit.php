<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;


class kreditdebit extends Model
{
    use HasFactory,LogsActivity;

    protected static $logName = 'pemasukan dan pengeluaran';

    protected static $logAttributes = ['harga_jual', 'rp'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Kamu melakukan {$eventName} pada data pemasukan dan pengeluaran";
    }

    protected $guarded = ['id'];

    public function nama_produk(){
        return $this->belongsTo(nama__produk::class , 'id_barang');
    }
}
