<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลจากฐานข้อมูล
        $users = User::paginate(10);
        return view('barber.index', compact('users')); // user คือฐานข้อมูล

        
    }

    public function create()
    {
        return view('barber.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $user->image = 'images/' . $imageName;  // บันทึกเส้นทางรูปภาพลงในฐานข้อมูล
        }
    
        $user->save();
    
        return redirect()->route('barber')->with('success', 'User registered successfully.');
    }
    
    

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'password' => 'sometimes|nullable|string|min:8|confirmed',
        'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $user->image = 'images/' . $imageName;
    }

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('barber')->with('success', 'User updated successfully.');
}



    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        // ทำการ redirect กลับไปยังหน้า index
        return redirect()->route('barber')->with('success', 'User deleted successfully.');
    }
}
