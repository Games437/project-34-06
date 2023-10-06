<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use Alert;

class UserController extends Controller
{
    public function index(){
        $user = User::paginate(4);
        return view('admin.user.index',compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.editform',compact('user'));
    }

    public function update(Request $request , $id){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|max:255',
        ],[
            'name.required' => 'กรุณากรอกชื่อ',
            'name.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'username.required' => 'กรุณากรอกชื่อผู้ใช้งาน',
            'username.unique' => 'มีชื่อผู้ใช้งานนี้อยู่ในฐานข้อมูลแล้ว',
            'username.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->update();
        toast('Success','success');
        return redirect()->route('admin.user');
    }
    public function delete($id){
        $user = User::find($id);
        $user::destroy($id);
        toast('Success','success');
        return redirect()->route('admin.user');
    }
}
