<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'customer_name', 
        'service_id', 
        'user_id', // เพิ่มคอลัมน์สำหรับชื่อช่าง
        'date', 
        'time', 
        'phone_number', 
        'additional_requests',
        'price',
        
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function serviceprice() {
        return $this->belongsTo(ServicePrice::class);
    }


}
