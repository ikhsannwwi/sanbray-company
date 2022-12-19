<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;


class tempat__distribusi extends Model
{
    use LogsActivity;

    protected static $logName = 'tempat distribusi';

    protected static $logAttributes = ['jenis_produk', 'slug'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Kamu melakukan {$eventName} pada data tempat distribusi";
    }

    protected $guarded = ['id'];
}
