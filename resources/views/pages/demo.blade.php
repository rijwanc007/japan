<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{ asset('assets/images/icon/Mother-lifts-logo.png') }}"/>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.min.js"> </script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
    html,
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Quicksand", sans-serif;
        font-size: 62.5%;
        font-size: 10px;
    }
    /*-- Inspiration taken from abdo steif -->
    /* --> https://codepen.io/abdosteif/pen/bRoyMb?editors=1100*/

    /* Navbar section */

    .nav {
        width: 100%;
        height: 65px;
        position: fixed;
        line-height: 65px;
        text-align: center;
    }

    .nav div.logo {
        float: left;
        width: auto;
        height: auto;
        padding-left: 3rem;
    }

    .nav div.logo a {
        text-decoration: none;
        color: #fff;
        font-size: 2.5rem;
    }

    .nav div.logo a:hover {
        color: #00E676;
    }

    .nav div.main_list {
        height: 65px;
        float: right;
    }

    .nav div.main_list ul {
        width: 100%;
        height: 65px;
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav div.main_list ul li {
        width: auto;
        height: 65px;
        padding: 0;
        padding-right: 3rem;
    }

    .nav div.main_list ul li a {
        text-decoration: none;
        color: #fff;
        line-height: 65px;
        font-size: 2.4rem;
    }

    .nav div.main_list ul li a:hover {
        color: #00E676;
    }


    /* Home section */

    .home {
        width: 100%;
        height: 100vh;
        background-image: url(https://images.unsplash.com/photo-1498550744921-75f79806b8a7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b0f6908fa5e81286213c7211276e6b3d&auto=format&fit=crop&w=1500&q=80);
        background-position: center top;
        background-size:cover;
    }

    .navTrigger {
        display: none;
    }

    .nav {
        padding-top: 20px;
        padding-bottom: 20px;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }


    /* Media qurey section */

    @media screen and (min-width: 768px) and (max-width: 1024px) {
        .container {
            margin: 0;
        }
    }

    @media screen and (max-width:768px) {
        .navTrigger {
            display: block;
        }
        .nav div.logo {
            margin-left: 15px;
        }
        .nav div.main_list {
            width: 100%;
            height: 0;
            overflow: hidden;
        }
        .nav div.show_list {
            height: auto;
            display: none;
        }
        .nav div.main_list ul {
            flex-direction: column;
            width: 100%;
            height: 100vh;
            right: 0;
            left: 0;
            bottom: 0;
            background-color: #111;
            /*same background color of navbar*/
            background-position: center top;
        }
        .nav div.main_list ul li {
            width: 100%;
            text-align: right;
        }
        .nav div.main_list ul li a {
            text-align: center;
            width: 100%;
            font-size: 3rem;
            padding: 20px;
        }
        .nav div.media_button {
            display: block;
        }
    }


    /* Animation */
    /* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

    .navTrigger {
        cursor: pointer;
        width: 30px;
        height: 25px;
        margin: auto;
        position: absolute;
        right: 30px;
        top: 0;
        bottom: 0;
    }

    .navTrigger i {
        background-color: #fff;
        border-radius: 2px;
        content: '';
        display: block;
        width: 100%;
        height: 4px;
    }

    .navTrigger i:nth-child(1) {
        -webkit-animation: outT 0.8s backwards;
        animation: outT 0.8s backwards;
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }

    .navTrigger i:nth-child(2) {
        margin: 5px 0;
        -webkit-animation: outM 0.8s backwards;
        animation: outM 0.8s backwards;
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }

    .navTrigger i:nth-child(3) {
        -webkit-animation: outBtm 0.8s backwards;
        animation: outBtm 0.8s backwards;
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }

    .navTrigger.active i:nth-child(1) {
        -webkit-animation: inT 0.8s forwards;
        animation: inT 0.8s forwards;
    }

    .navTrigger.active i:nth-child(2) {
        -webkit-animation: inM 0.8s forwards;
        animation: inM 0.8s forwards;
    }

    .navTrigger.active i:nth-child(3) {
        -webkit-animation: inBtm 0.8s forwards;
        animation: inBtm 0.8s forwards;
    }

    @-webkit-keyframes inM {
        50% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(45deg);
        }
    }

    @keyframes inM {
        50% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(45deg);
        }
    }

    @-webkit-keyframes outM {
        50% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(45deg);
        }
    }

    @keyframes outM {
        50% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(45deg);
        }
    }

    @-webkit-keyframes inT {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }
        50% {
            -webkit-transform: translateY(9px) rotate(0deg);
        }
        100% {
            -webkit-transform: translateY(9px) rotate(135deg);
        }
    }

    @keyframes inT {
        0% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(9px) rotate(0deg);
        }
        100% {
            transform: translateY(9px) rotate(135deg);
        }
    }

    @-webkit-keyframes outT {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }
        50% {
            -webkit-transform: translateY(9px) rotate(0deg);
        }
        100% {
            -webkit-transform: translateY(9px) rotate(135deg);
        }
    }

    @keyframes outT {
        0% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(9px) rotate(0deg);
        }
        100% {
            transform: translateY(9px) rotate(135deg);
        }
    }

    @-webkit-keyframes inBtm {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }
        50% {
            -webkit-transform: translateY(-9px) rotate(0deg);
        }
        100% {
            -webkit-transform: translateY(-9px) rotate(135deg);
        }
    }

    @keyframes inBtm {
        0% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-9px) rotate(0deg);
        }
        100% {
            transform: translateY(-9px) rotate(135deg);
        }
    }

    @-webkit-keyframes outBtm {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }
        50% {
            -webkit-transform: translateY(-9px) rotate(0deg);
        }
        100% {
            -webkit-transform: translateY(-9px) rotate(135deg);
        }
    }

    @keyframes outBtm {
        0% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-9px) rotate(0deg);
        }
        100% {
            transform: translateY(-9px) rotate(135deg);
        }
    }

    .affix {
        padding: 0;
        background-color: #111;
    }






    .myH2 {
        text-align:center;
        font-size: 4rem;
    }
    .myP {
        text-align: justify;
        padding-left:15%;
        padding-right:15%;
        font-size: 20px;
    }
    @media all and (max-width:700px){
        .myP {
            padding:2%;
        }
    }
</style>
<body>
<nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="{{ route('pages.home') }}"><img class="" src="assets/images/logo/setcolbd.png" alt="logo"/></a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li class=" @yield('home')">
                    <a class="nav-link nav_item_design" href="index.php">Home</a>
                </li>
                <li class=" @yield('about_japan')">
                    <a class="nav-link nav_item_design" href="about_us.php">About Japan</a>
                </li>
                <li class=" dropdown @yield('visa')">
                    <a class="nav-link dropdown-toggle nav_item_design" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Visa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item nav_item_design" href="passenger_lift.php">Career</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item nav_item_design" href="capsule_lift.php">FAQ</a>
                    </div>
                </li>
                <li class="  @yield('legal_issue')">
                    <a class="nav-link nav_item_design" href="spare_parts.php">Legal Issue</a>
                </li>
                <li class="  @yield('news_feed')">
                    <a class="nav-link nav_item_design" href="our_brand.php">News Feed</a>
                </li>
                <li class="  @yield('teacher')">
                    <a class="nav-link nav_item_design" href="project.php">Teacher profile</a>
                </li>
                <li class="  @yield('language')">
                    <a class="nav-link nav_item_design" href="team.php">Language</a>
                </li>
                <li class="  @yield('blog')">
                    <a class="nav-link nav_item_design" href="team.php">Blog</a>
                </li>
                <li class="  @yield('contact')">
                    <a class="nav-link nav_item_design" href="project.php">Contact</a>
                </li>
                <li class="  @yield('sign_up')">
                    <a class="nav-link nav_item_design" href="team.php">Sign Up</a>
                </li>

            </ul>
        </div>
        <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
        </span>
    </div>
</nav>



<section class="home">
</section>
<div style="height: 1000px">
    <!-- just to make scrolling effect possible -->
    <h2 class="myH2">What is this ?</h2>
    <p class="myP">This is a responsive fixed navbar animated on scroll</p>
    <p class="myP">I took inspiration from  ABDO STEIF (<a href="https://codepen.io/abdosteif/pen/bRoyMb?editors=1100">https://codepen.io/abdosteif/pen/bRoyMb?editors=1100</a>)
        and Dicson <a href="https://codepen.io/dicson/pen/waKPgQ">(https://codepen.io/dicson/pen/waKPgQ)</a></p>
    <p class="myP">I HOPE YOU FIND THIS USEFULL</p>
    <p class="myP">Albi</p>
    <p class="myP">

        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
    </p>
</div>

<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 800) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });
</script>
</body>
</html>
