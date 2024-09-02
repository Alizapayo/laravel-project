<?php

namespace App\Http\Controllers;
use App\Models\Service; // ใช้ชื่อโมเดลที่ถูกต้อง
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $data = Service::paginate(10); // ดึงข้อมูลตารางทั้งหมดจากฐานข้อมูลและแบ่งหน้า
        return view('services.index', compact('data'));
    }

    public function create() {
        
        return view('services.create',compact('user'));
    }

    public function store(Request $request) {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_duration' => 'required|string|max:255',
        ]);

        $data = new Service();
        $data->service_name = $request->service_name;
        $data->service_duration = $request->service_duration;
        $data->save();

        return redirect()->route('services')->with('success', 'เพิ่มข้อมูลสำเร็จ!');
    }
    

    //public function edit($id) {
        //$service = Service::findOrFail($id);
       // return view('services.edit', compact('service'));
  // }
    
//แก้ไขข้อมูล
    public function update(Request $request, $id) {
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_duration' => 'required|string|max:255',
        ]);
        $service = Service::findOrFail($id);
        $service->service_name = $request->service_name;
        $service->service_duration = $request->service_duration;
        $service->save();

        return redirect()->route('services')->with('success', 'แก้ไขข้อมูลสำเร็จ!');
    }

//ลบข้อมูล
    public function delete($id) {
        Service::findOrFail($id)->delete();
        return redirect()->route('services')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}