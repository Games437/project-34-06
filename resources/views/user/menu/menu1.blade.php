@extends('layouts.front-end.master')

@section('css')
<link rel="stylesheet" href="{{ asset('front-end/menu.css') }}">
@endsection

@section('Currently improving')
<script>
    var typed = new Typed('.auto-type', {
      strings: ['ขณะนี้อยู่ในช่วงกำลังพัฒนา อาจจะมีบางหน้าเกิดข้อผิดพลาด<br>ขออภัยในความไม่สะดวก'],
      typeSpeed: 100,
      loop: true
    });
    </script>  
@endsection

@section('menu')
<section class="menu" id="menu">
    <div class="header-text" id="Corndog">
        <h2>คอร์นด๊อก</h2>
    </div>
    <div class="container">

        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/corndog1.png')}}" width="500" height="150">
                </div>
                <p>คอร์นด๊อกเคลือบมันฝรั่ง <br>(ชีสล้วน)<br> Size L <br><br> 75 บาท</p>
            </div>
            <!-- menu 2-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/corndog1.png')}}" width="500" height="150">
                </div>
                <p>คอร์นด๊อกเคลือบมันฝรั่ง <br>(ชีส+ไส้กรอก)<br> Size L <br><br> 59 บาท</p>
            </div>
        </div>
        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/คอร์นด๊อกเคลือบเกล็ดขนมปัง.png')}}" width="500" height="150">
                </div>
                <p>คอร์นด๊อกเคลือบเกล็ดขนมปัง<br>(ชีสล้วน) <br> Size L <br><br> 65 บาท</p>
            </div>
            <!-- menu 2-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/corndog2.png')}}" width="500" height="150">
                </div>
                <p>คอร์นด๊อกเคลือบมาม่า <br>(ไส้กรอก)<br>Size XL <br><br> 50 บาท</p>
            </div>
        </div>
    </div>
</section>
@endsection