<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corndog Koji And Pizza Aloha shop</title>
    <!-- custom css-->
    <link rel="stylesheet" href="{{ asset('front-end/about.css') }}">
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<body>
<!--
    <header>
        <div class="navbar">
            <img src="Image/logo-koji3.png" class="logo">
            <ul class="link">
                <li><a href="">Home</a></li>
                <li><a href="">Menu</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </div>
    </header>
-->

    <section id="home" id="home">
        <div class="content">
            <div class="banner-text">
                <span class ="auto-type"></span>
            </div>
        </div>
        <div class="navbar">
            <img src="{{ asset('front-end/Image/logo-koji3.png') }}" class="logo">
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="link">
                <li><a href="/#home">Home</a></li>
                <li><a href="/#product-type">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </section> 

    <script src="/style.js"></script>


    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
    var typed = new Typed('.auto-type', {
      strings: ['ขณะนี้อยู่ในช่วงกำลังพัฒนา อาจจะมีบางหน้าเกิดข้อผิดพลาด<br>ขออภัยในความไม่สะดวก'],
      typeSpeed: 100,
      loop: true
    });
    </script>  

    <!-- Product -->
    <section class="about shop" id="about">
        <div class="title-text">
            <h1>ช่องทางการสั่งซื้อ</h1>
            <p>สามารถสั่งซื้อได้ที่หน้าร้าน<br>
                316/77 วงศ์สว่าง 11 เขตบางซื่อ กรุงเทพมหานคร 10800<br>
                หรือช่องทางออนไลน์ได้ดังนี้</p>
        </div>
        <div class="social-links">   
            <!-- Box 1 -->
            <div class="box">
               <a href="https://shorturl.at/aimqQ"><img src="{{ asset('front-end/Image/lineman-icon.png')}}"></a> 
            </div>
        </div>
    </section>
</body>
<footer>
    <!-- Footer-->
    <section class="footer" id="footer">
        <img src="{{ asset('front-end/Image/logo-koji3.png') }}" class="footer-img">
        <div class="footer-row">
        <div class="footer-left">
            <h1>ติดต่อ</h1>
        <div class="footer-left">
            <p>Line : @937zzmhg</p>
        </div>
        </div>
        <div class="footer-right">
            <h1>เปิดบริการ</h1>
            <div class="footer-right">
            <p>วัน จ. - พฤ.</p>
            <p>เวลา 11:00น. - 19:00น.</p>
        </div>
        </div>
        </div>
    </section>
</footer>
</html>