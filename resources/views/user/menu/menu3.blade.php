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
    <div class="header-text" id="sticky">
        <h2>ข้าวเหนียว</h2>
    </div>
        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/caw1.png')}}" width="500" height="150">
                </div>
                <p>ข้าวเหนียวหมูฝอย<br><br> 50 บาท</p>

            </div>
            <!-- menu 2-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/caw2.png')}}" width="500" height="150">
                </div>
                <p>ข้าวเหนียว<br>ไก่กระเทียม <br><br> 50 บาท</p>
                
            </div>
        </div>
        <div class="menu-content">
            <!-- menu 1-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/caw3.png')}}" width="500" height="150">
                </div>
                <p>ข้าวเหนียว<br>ไก่นิวออลีนส์<br><br> 80 บาท</p>
            </div>
            <!-- menu 2-->
            <div class="menu-img-row">
                <div class="menu-img">
                    <img src="{{asset('front-end/Image/caw4.png')}}" width="500" height="150">
                </div>
                <p>ข้าวเหนียว<br>หมูยอทอด<br><br> 50 บาท</p>
            </div>
        </div>
</section>
@endsection