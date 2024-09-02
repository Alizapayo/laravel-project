<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ServicePrice;
use App\Models\Service;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index() {
        $data = Service::get(); // ดึงข้อมูลจากตาราง services
        $user = User::get(); 
        $serviceprice = ServicePrice::get(); 
        $bookings = Booking::paginate(10);
        return view('frontend.booking', compact('data', 'user','serviceprice', 'bookings'));
        
    }

    
    
    public function fetchPrice(Request $request)
{
    $serviceId = $request->input('service_id');
    $userId = $request->input('user_id');

    // ค้นหาราคาโดยใช้ service_id และ user_id จากตาราง ServicePrice
    $servicePrice = ServicePrice::where('service_id', $serviceId)
                                 ->where('user_id', $userId)
                                 ->first();

    $price = $servicePrice ? $servicePrice->price : null;

    return response()->json(['price' => $price]);
}


    

    
    

public function store(Request $request)
{
    // Validate ข้อมูลที่รับมา
    $request->validate([
        'customer_name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'service_id' => 'required|exists:services,id',
        'user_id' => 'required|exists:users,id',
        'date' => 'required|date',
        'time' => 'required',
        'price' => 'required|string|max:255',
        'additional_requests' => 'nullable|string',
    ]);

    // บันทึกข้อมูลการจอง
    $booking = Booking::create($request->all());

    // ส่งข้อมูลการจองไปแสดงผลในหน้าเดิม
    return redirect()->back()->with('booking', $booking);
}


       

        
    
}
