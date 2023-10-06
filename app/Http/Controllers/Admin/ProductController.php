<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Alert;
use Illuminate\Support\Str;
use Image;
use File;
use App\Models\Product_type;

class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate(4);

        return view('admin.product.index',compact('product'))->with('product_types',Product_type::all());
    }
    public function createform(){
        return view('admin.product.create')->with('product_types',Product_type::all());
    }
    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required|numeric',
            'product_type' => 'required',
            'image' => 'required|mimes:jpg,bmp,png|file',
        ],[
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'name.unique' => 'มีชื่อสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'สามารถกรอกได้เฉพาะตัวเลขเท่านั้น',
            'image.required' => 'กรุณาอัพโหลดไฟล์ภาพ',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpg,bmp,png เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
        ]);
        // dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->product_type_id = $request->product_type;

        if($request->hasFile('image')){
            $filename = str::random(5).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/images/',$filename);
            $product->image = $filename;
        }else{
            $product->image = 'nopic.jpg';
        }
        $product->save();
        toast('Success','success');
        return redirect()->route('admin.product');
    }
    public function edit($product_id){
        $product = Product::find($product_id);
        return view('admin.product.editform',compact('product'))->with('product_types',Product_type::all());
    }
    public function delete($product_id){
        $product = Product::find($product_id);
            if($product->image != 'nopic.jpg'){
                File::delete(public_path().'/images/'.$product->image);
            }
            $product->delete();
        toast('Success','success');
        return redirect()->route('admin.product');
    }
    public function update(Request $request , $product_id){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'product_type' => 'required',
            'image' => 'mimes:jpg,bmp,png|file',
        ],[
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'name.max' => 'สามารถกรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'สามารถกรอกได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpg,bmp,png เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
        ]);
        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->product_type_id = $request->product_type;
        if($request->hasFile('image')){
            if($product->image != 'nopic.jpg'){
                File::delete(public_path().'/images/'.$product->image);
            }
            $filename = str::random(5).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/images/',$filename);
            $product->image = $filename;
        }
        $product->update();
        toast('Success','success');
        return redirect()->route('admin.product');
    }
}
