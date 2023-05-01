<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="image/logo_tab.png">
    <title>NourishNow</title>

    <!--Linking Swiper CSS Cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--Code for Fontawsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Linking custom Css File-->
    <link rel="stylesheet" href="./CSS/home.css">
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
    <link rel="stylesheet" href="./CSS/search.css">

</head>

<body>
    <!--Header Section-->
    <header class="header">
        <a href="#" class="logo"><div class="logo-container">
            <img src="./image/logo_tab.png" class="logo-image">
            <h4>ourishnow</h4>
        </div></a>

        <!--Navbar-->
        <nav class="navbar">
            <a href="main.php#home">home</a>
            <a href="main.php#features">features</a>
            <a href="main.php#products">products</a>
            <a href="main.php#categories">categories</a>
            <a href="main.php#reviews">reviews</a>
            <a href="main.php#contact">contact us</a>

        </nav>

        <!--Icons-->
        <div class="icons">
            <div class="fa fa-search" id="search-btn"></div>
            <div class="fa fa-heart-o" id="wishlist-btn"></div>
            <div class="fa fa-shopping-cart" id="cart-btn"></div>
            <div class="fa fa-user" id="login-btn"></div>
            <div class="fa fa-bars" id="menu-btn"></div>
        </div>

        <!--Search Bar-->
        <form action="search.php" method="POST" class="search-form">
            <input type="text" name="search" id="search-box" placeholder="Search in NourishNow...">
            <button type="submit" class="search-btn"><label for="search-box" class="fa fa-search"></label></button>
        </form>

        <!-- Shopping Cart -->
        <div class="shopping-cart">
            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="image/cart-img-1.png" alt="item1">
                <div class="content">
                    <h3>Watermelon</h3>
                    <span class="price">₹40/-</span>
                    <span class="quantity">Qty : 1</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="image/cart-img-2.png" alt="item2">
                <div class="content">
                    <h3>Onion</h3>
                    <span class="price">₹/50-</span>
                    <span class="quantity">Qty : 1kg</span>
                </div>
            </div>

            <div class="box">
                <i class="fa fa-trash"></i>
                <img src="image/cart-img-3.png" alt="item3">
                <div class="content">
                    <h3>Chicken</h3>
                    <span class="price">₹200/-</span>
                    <span class="quantity">Qty : 1kg</span>
                </div>
            </div>

            <div class="total"> total : ₹290/- </div>
            <a href="#" class="btn">Checkout</a>
        </div>
        <!-- Shopping Cart -->

        <!-- Responsive Login-->
        <form action="#" class="login-form">
            <h3>Login Now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>Forget Your Password <a href="#">Click Here</a></p>
            <p>Don't Have An Account <a href="#">Create Now</a></p>

            <input type="submit" value="Login Now" class="btn">
        </form>

        <!--Navbar-->
    </header>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!--Linking Javascript File-->
    <script src="./javascript/home.js"></script>