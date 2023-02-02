<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;

use Spatie\Activitylog\Traits\LogsActivity;


class jenis__produk extends Model
{
    use HasFactory,HasSlug,LogsActivity;
   

    protected static $logName = 'jenis produk';

    protected static $logAttributes = ['jenis_produk', 'slug'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Kamu melakukan {$eventName} pada data jenis produk";
    }

    protected $guarded = ['id'];

    public function nama_produk(){
        return $this->hasMany(nama__produk::class, 'id_jenis_produk','id');
    }

    public function slugConfigs(): array
    {
        return [
            'slug' => 'jenis_produk'
        ];
    }
}
