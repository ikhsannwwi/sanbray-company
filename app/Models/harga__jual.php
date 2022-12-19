<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;


class harga__jual extends Model
{
    use HasFactory,LogsActivity;

    protected static $logName = 'Harga Jual';

    protected static $logAttributes = ['harga_jual', 'rp'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Kamu melakukan {$eventName} pada data harga jual";
    }

    protected $guarded = ['id'];
}
