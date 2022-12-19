<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;


class tempat__distribusi extends Model
{
    use LogsActivity;
    protected $guarded = ['id'];
}
