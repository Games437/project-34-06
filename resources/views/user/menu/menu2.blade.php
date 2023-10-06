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
    <div class="header-text" id="Pizza">
        <h2>พิซซ่า</h2>
    </div>
        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/pizza1.png')}}" width="500" height="150">
                </div>
                <p>พิซซ่าฮาวาเอี้ยน<br> Size M <br><br> 115 บาท</p>

            </div>
            <!-- menu 2-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/pizza2.png')}}" width="500" height="150">
                </div>
                <p>พิซซ่าซีฟู้ดสุพรีม<br>Size M <br><br> 125 บาท</p>

            </div>
        </div>
        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/pizza3.png')}}" width="500" height="150">
                </div>
                <p>พิซซ่ามิกซ์คอมโบ<br> Size M <br><br> 115 บาท</p>

            </div>
            <!-- menu 2-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/pizza4.png')}}" width="500" height="150">
                </div>
                <p>พิซซ่าแฮมชีส<br> Size M <br><br> 115 บาท</p>

            </div>
        </div>
</section>
@endsection