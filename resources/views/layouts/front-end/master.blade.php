<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corndog Koji And Pizza Aloha shop</title>
    <!-- custom css-->
    @yield('css')
    

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body">
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

    <section class="home" id="home">
        <div class="content">
            <div class="banner-text">
                <span class ="auto-type"></span>
            </div>
        </div>
        <div class="navbar" >
            <img src="{{ asset('front-end/Image/logo-koji3.png') }}" class="logo">
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="link">
                <li><a href="/">Home</a></li>
                <li><a href="#product-type">Menu</a></li>
                <li><a href="{{ route('about.shop') }}#about">About</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </section> 

    <script src="style.js"></script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    @yield('Currently improving')
    <!--
    <script>
    var typed = new Typed('.auto-type', {
      strings: ['Korean Corndog Koji <br> And <br> Pizza Aloha Shop'],
      typeSpeed: 100,
      loop: true
    });
    </script>  
    !-->
    <!-- Product -->
    <section class="product type" id="product-type" >
        <div class="title-text">
            <h2>ประเภทเมนู</h2>
        </div>
        <div class="product-content">
                <!-- Box 1 -->
            <div class="grid">
                <div class="box">
                    <a href="{{ route('menu.corndog') }}#Corndog">
                    <img src="{{ asset('front-end/Image/corndog.png') }}" alt=""></a>
                    <h2><a href="{{ route('menu.corndog') }}">คอร์นด็อก</a></h2>
                </div>
                <!-- Box 2 -->
                <div class="box">
                    <a href="{{ route('menu.pizza') }}#Pizza">
                    <img src="{{ asset('front-end/Image/pizza.png') }}" alt=""></a>
                    <h2><a href="/menu-page/menu2.html#Pizza">พิซซ่า</a></h2>
                </div>
                <!-- Box 3 -->
                <div class="box"><a href="{{ route('menu.sticky') }}#sticky">
                    <img src="{{ asset('front-end/Image/sticky.png') }}" alt=""></a>
                    <h2><a href="/menu-page/menu3.html#sticky">ข้าวเหนียว</a></h2>
                </div>
                <!-- Box 4 -->
                <div class="box"><a href="{{ route('menu.promotion') }}#Promotion">
                    <img src="{{ asset('front-end/Image/promotion.png') }}" alt=""></a>
                    <h2><a href="/menu-page/menu4.html#Promotion">ชุดสุดคุ้ม</a></h2>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>

        <!-- menu -->
        @yield('menu')
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