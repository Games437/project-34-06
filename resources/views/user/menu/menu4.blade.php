@extends('layouts.front-end.master')
@section('css')
<link rel="stylesheet" href="{{ asset('front-end/menu.css') }}">
@endsection

@section('Currently improving')
<script>
    var typed = new Typed('.auto-type', {
      strings: ['ขณะนี้อยู่ในช่วงกำลังพัฒนา อาจจะมีบางหน้าเกิดข้อผิดพลาด ขออภัยในความไม่สะดวก'],
      typeSpeed: 100,
      loop: true
    });
    </script>  
@endsection

@section('menu')
<section class="menu" id="menu">
    <div class="header-text" id="promotion">
        <h2>ชุดสุดคุ้ม</h2>
    </div>
        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/promotion1.png') }}" width="500" height="150">
                </div>
                <p>เมนูข้าวเหนียมหมูฝอย,ไก่กระเทียม <br>หมูยอทอด <br><br>ซื้อ 3 กล่องเพียง 100 บาท <br></p>
            </div>
</section>
@endsection