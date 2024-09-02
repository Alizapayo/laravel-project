<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\User; // ตัวอย่าง: Model ของ User
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลจากฐานข้อมูล (ตัวอย่าง: ดึงข้อมูล User ทั้งหมด)
        $users = User::all();
        $bookings = Booking::all();

        // ส่งข้อมูลไปที่ Blade Template
        return view('frontend.shop', compact('users','bookings'));
    }
}
