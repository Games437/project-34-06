<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_type;
use Alert;

class Product_typeController extends Controller
{
    public function index(){
        $product_type = Product_type::paginate(4);
        return view('admin.product_type.index',compact('product_type'));
    }
    public function createform(){
        return view('admin.product_type.create');
    }
    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:product_types|max:255',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.unique' => 'มีประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
        ]);
        $product_type = new Product_type();
        $product_type->name = $request->name;
        $product_type->save();
        toast('Success','success');
        return redirect()->route('admin.product_type');
    }
    public function edit($product_type_id){
        $product_type = Product_type::find($product_type_id);
        return view('admin.product_type.editform',compact('product_type'));
    }
    public function delete($product_type_id){
        $product_type = Product_type::find($product_type_id);
        $product_type::destroy($product_type_id);
        toast('Success','success');
        return redirect()->route('admin.product_type');
    }
    public function update(Request $request , $product_type_id){
        $validated = $request->validate([
            'name' => 'required|unique:product_types|max:255',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.unique' => 'มีประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
        ]);
        $product_type = Product_type::find($product_type_id);
        $product_type->name = $request->name;
        $product_type->update();
        toast('Success','success');
        return redirect()->route('admin.product_type');
    }
}
