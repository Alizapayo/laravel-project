<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePrice extends Model
{
    use HasFactory;
    protected $table = 'service_prices';
    protected $fillable = [
        'user_id',
        'service_id',
        'price',

    ];

     
  
        public function user() {
            return $this->belongsTo(User::class);
        }
    
        public function service() {
            return $this->belongsTo(Service::class);
        }
    }
    



