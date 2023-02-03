<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
class role extends Model
{
    use HasFactory ,LogsActivity;
    
        protected static $logName = 'role';
    
        protected static $logAttributes = ['jenis_produk', 'slug'];
    
        public function getDescriptionForEvent(string $eventName): string
        {
            return "Kamu melakukan {$eventName} pada data role";
        }

    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class, 'id','role_id');
    }
}
