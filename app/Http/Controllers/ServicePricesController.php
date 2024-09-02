<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ServicePrice;
use App\Models\Service;

class ServicePricesController extends Controller
{
    public function index() {
        $user = User::get();
        $data = Service::get();
        $serviceprice = ServicePrice::paginate(10); // ดึงข้อมูลจากฐานข้อมูลและแบ่งหน้า
         
        return view('serviceprice', compact('serviceprice','user','data'));

        
    }

    //อาจไม่ต้องใช้
    public function create() {
       return view('serviceprice.create');
    }

    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'service_id' => 'required|integer|exists:services,id',
            'price' => 'required|string|max:255',
        ]);

        $data = new ServicePrice();
        $data->user_id = $request->user_id;
        $data->service_id = $request->service_id;
        $data->price = $request->price;

        $data->save();

        return redirect()->route('serviceprice')->with('success', 'เพิ่มข้อมูลสำเร็จ!');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'service_id' => 'required|integer|exists:services,id',
            'price' => 'required|string|max:255',
        ]);
      
        $serviceprice = ServicePrice::findOrFail($id);
        $serviceprice->user_id = $request->user_id;
        $serviceprice->service_id = $request->service_id;
        $serviceprice->price = $request->price;
        $serviceprice->save();

        return redirect()->route('serviceprice')->with('success', 'แก้ไขข้อมูลสำเร็จ!');
    }

    public function delete($id) {
        ServicePrice::findOrFail($id)->delete();
        return redirect()->route('serviceprice')->with('success', 'ลบข้อมูลสำเร็จ');
    }
    

}
