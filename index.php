<?php
    session_start();
    if(isset($_SESSION['hostel']) && $_SESSION['first_name'] && $_SESSION['last_name']){
        $hostel = $_SESSION['hostel'];
        $fname = $_SESSION['first_name'];
        $lname = $_SESSION['last_name'];
    }   
    require_once 'sso_handler.php';
    $CLIENT_ID = 'SFsZFHeP4dPDVm1xo8XzN1BWxlkAUPp4mCPfiExv';
    $CLIENT_SECRET = 'MhyphhUDvRiTwYhLFl6ZaU6BWdcBKUElAGdGCkC5a23yVPWYvAjQL3f0sKuLdtLidNZlZQEBOwuN9EFWg2ikfaOxf46UXad1pQX02XPf6sSvVu17qdw9trjmoIct1bMB';
    $permissions = 'basic profile insti_address';
    $response_type = 'code';
    $state = 'user_login';
    $sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
    $url = $sso_handler->gen_auth_url($response_type, $state, $permissions);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Activitar Template">
    <meta name="keywords" content="Activitar, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel 18 | IIT Bombay</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="https://www.mockplus.com/css/icon/iconfont.css?v=77">
    <link rel="stylesheet" href="https://www.mockplus.com/enUS/css/global.css?v=77">
    <link rel="stylesheet" href="https://www.mockplus.com/enUS/css/blog.css?v=77"> -->
<!--     <script src="https://www.mockplus.com/js/lib/jquery-1.11.2.min.js"></script>
    <script src="https://www.mockplus.com/js/pagination.js"></script>
    <script src="https://www.mockplus.com/js/global.js?v=77"></script> -->
    <script src="https://gymkhana.iitb.ac.in/profiles/static/widget/js/login.min.js" type="application/javascript"></script>
    <style type="text/css">
    	.single-hero-item{
    		height: 100vh !important;
    	}
    	.owl-dots{
    		display: none;
    	}
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section" style="background-color:white">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html">
                    <!-- <img src="img/logo.png" alt=""> -->
                </a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li class="active"><a href="index.php" >Home</a></li>
                            <li><a href="council.php">Council & Staff</a></li>
                            <li><a href="schedule.php">Documents</a> <ul class="dropdown">
                                    <li><a href="about-us.html">Hostel Rules</a></li>
                                    <li><a href="./blog-single.html">Election Document</a></li>
                                    <li><a href="./blog-single.html">MOM</a></li>
                                    <li><a href="./blog-single.html">Guest Room Policy</a></li>
                                </ul>
                            </li>
                            <li><a href="facilities.php">Facilities Available</a></li>
                            <?php
                                if(isset($hostel)){
                                    if($hostel == 18){
                                        echo
                                        '<li><a href="">Forms</a>
                                            <ul class="dropdown">
                                                <li><a href="./about-us.html">Mess Rebate</a></li>
                                                <li><a href="./blog-single.html">Room Vacation Form</a></li>
                                                <li><a href="./blog-single.html">Room Joining Form</a></li>
                                                <li><a href="./blog-single.html">Mess Referendum</a></li>
                                                <li><a href="./blog-single.html">Bonafide, FR</a></li>
                                            </ul>
                                        </li>';
                                    }
                                }
                            ?>
                            <li><a href="">Maintanance Complaints</a>
                                <ul class="dropdown">
                                    <a href="./about-us.html">Support Portal</a>
                                    <!-- <li><a href="./blog-single.html">Room Vacation Form</a></li>
                                    <li><a href="./blog-single.html">Room Joining Form</a></li>
                                    <li><a href="./blog-single.html">Mess Referendum</a></li>
                                    <li><a href="./blog-single.html">Bonafide, FR</a></li> -->
                                </ul>
                            </li>
                            <li><a href="contact.php">Reach Us</a></li>
                            <?php 
                                if(!isset($fname)){
                                    echo "<li><a href='$url' class='primary-btn about-btn'>SSO Login</a></li>"; 
                                }   
                                else{
                                    if(isset($fname) && isset($lname)){
                                        echo "<li><a href=''>Hi, $fname&nbsp$lname</a></li>"; 
                                    }
                                } 
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header> 
    <section class="testimonial-section set-bg spad" style="padding:0px">
            <div class="row" style="width:100%;margin:0px">
                <div class="col-lg-12"  style="padding:0px">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
		                    <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-4.jpg">
				                <div class="container" style="z-index:100">
				                    <div class="row">
				                        <div class="col-lg-12">
				                            <div class="hero-text">
				                                <h2>Join Us Now</h2>
				                                <h1>FITNESS & SPORT</h1>
				                                <a href="#" class="primary-btn">Read More</a>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
                        </div>
                        <div class="ts-item">
                            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-5.jpg">
				                <div class="container">
				                    <div class="row">
				                        <div class="col-lg-12">
				                            <div class="hero-text">
				                                <h2>Join Us Now</h2>
				                                <h1>FITNESS & SPORT</h1>
				                                <a href="#" class="primary-btn">Read More</a>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
                        </div>
                        <div class="ts-item">
                            <div class="single-hero-item set-bg" data-setbg="img/hero-slider/hero-3.jpg">
				                <div class="container">
				                    <div class="row">
				                        <div class="col-lg-12">
				                            <div class="hero-text">
				                                <h2>Join Us Now</h2>
				                                <h1>FITNESS & SPORT</h1>
				                                <a href="#" class="primary-btn">Read More</a>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
                        </div>
                    </div>
                </div>
            </div>

    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="about-text">
                        <h2>ABOUT HOSTEL 18</h2>
                        <p class="short-details">CrossFit is a cutting-edge functional fitness system that can help
                            everyday men.</p>
                        <p class="long-details">Success isn’t really that difficult. There is a significant portion of
                            the population here in North America, that actually want and need success to be hard! For
                            those of you who are serious about having more, doing more, giving more and being more.</p>
                        <a href="#" class="primary-btn about-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blog-single-sidebar">
                        <div class="bs-latest-news">
                            <h4>News Latest</h4>
                            <a href="#" class="bl-item set-bg" data-setbg="img/sidebar-latest.jpg">
                                <h5>We all have those moments in our lives when we feel.</h5>
                                <span>January 31, 2019</span>
                            </a>
                            <a href="#" class="bl-item set-bg" data-setbg="img/sidebar-latest.jpg">
                                <h5>Finding the perfect learning tool for Flash is a daunting task to any novice.</h5>
                                <span>January 31, 2019</span>
                            </a>
                            <a href="#" class="bl-item set-bg" data-setbg="img/sidebar-latest.jpg">
                                <h5>The buying of large-screen TVs has absolutely skyrocketed lately. </h5>
                                <span>January 31, 2019</span>
                            </a>
                            <a href="#" class="bl-item set-bg" data-setbg="img/sidebar-latest.jpg">
                                <h5>Kidney stones are very hard mineral deposits that happen.</h5>
                                <span>January 31, 2019</span>
                            </a>
                        </div>
                        <div class="bs-recent-news">
                            <h4>Recent News</h4>
                            <a href="#" class="br-item">
                                <div class="bi-pic">
                                    <img src="img/br-recent-1.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <span>Jan 31, 2019</span>
                                    <h5>Easy Home Remedy For Moisture Control Of Skin</h5>
                                </div>
                            </a>
                            <a href="#" class="br-item">
                                <div class="bi-pic">
                                    <img src="img/br-recent-2.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <span>Jan 31, 2019</span>
                                    <h5>Turkey Gravy Secrets Revealed</h5>
                                </div>
                            </a>
                            <a href="#" class="br-item">
                                <div class="bi-pic">
                                    <img src="img/br-recent-3.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <span>Jan 31, 2019</span>
                                    <h5>How To Remove Kidney Stones</h5>
                                </div>
                            </a>
                            <a href="#" class="br-item">
                                <div class="bi-pic">
                                    <img src="img/br-recent-4.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <span>Jan 31, 2019</span>
                                    <h5>Help Finding Information Online</h5>
                                </div>
                            </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About Section End -->

    <!-- Classes Section Begin -->
<!--     <section class="classes-section">
        <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>Choose Your Program</h2>
                            <p>Our Crossfit experts can help you discover new training techniques and exercises that offer a dynamic and efficient full-body workout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-1.jpg">
                        <h4>Crossfit Level 1</h4>
                        <p>Sufferers around the globe will be happy to hear that there are sleep apnea remedies.</p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-2.jpg">
                        <h4>BootCamp</h4>
                        <p>The oil, also called linseed oil, has many industrial uses – it is an important ingredient
                        </p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-3.jpg">
                        <h4>Energy Blast</h4>
                        <p>It is a very common occurrence like cold or fever depending upon your lifestyle. </p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/class-4.jpg">
                        <h4>CLASSIC BODY BALANCE</h4>
                        <p>The procedure is usually a preferred alternative to photorefractive keratectomy,</p>
                        <a href="#" class="primary-btn class-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 --><!-- 
    <section class="classtime-section class-time-table spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>MESS MENU</h2>
                    </div>
                </div>
            </div>
            <div class="classtime-table">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="workout-time">Breakfast</td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                                <span>Crossfit lv1</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">Lunch</td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>14.00 - 17.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>14.00 - 17.00</span>
                                <h6>Crossfit lv1</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>14.00 - 15.30</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">16.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>16.00 - 18.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="candy">
                                <span>16.00 - 19.00</span>
                                <h6>Candy</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="candy">
                                <span>16.00 - 19.00</span>
                                <h6>Candy</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="ppsr">
                                <span>16.00 - 17.00</span>
                                <h6>Ppsr</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="murph">
                                <span>16.00 - 20.00</span>
                                <h6>murph</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">Snacks</td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>18.00 - 20.00</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="ppsr">
                                <span>18.00 - 20.00</span>
                                <h6>ppsr</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="chelsea">
                                <span>18.00 - 22.00</span>
                                <h6>Chelsea</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="annie">
                                <span>18.00 - 22.00</span>
                                <h6>annie</h6>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">Dinner</td>
                            <td class="hover-bg ts-item" data-tsmeta="lunge">
                                <span>21.00 - 23.00</span>
                                <h6>Lunge Ball Bur</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>20.00 - 22.00</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="walls">
                                <span>20.30 - 23.00</span>
                                <h6>Walls to Knees</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>22.00 - 23.00</span>
                                <h6>Crossfit Lv2</h6>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <span>21.00 - 23.00</span>
                                <h6>Crossfit Lv2</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> -->
    <!-- Class Time Section End -->

    <!-- Price Plan Section Begin -->
<!--     <section class="price-section spad set-bg" data-setbg="img/price-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>CHOOSE YOUR PRICING PLAN</h2>
                        <p>These reports started to surface when Congress was having hearings about the<br />
                            painkiller, Vioxx. A Food and Drug Administration staff member.</p>
                    </div>
                    <div class="toggle-option">
                        <ul>
                            <li>Monthly</li>
                            <li>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li>Years</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Normal</h4>
                        <div class="price-plan">
                            <h2>55 <span>$</span></h2>
                            <p>Monthly</p>
                        </div>
                        <ul>
                            <li>Unlimited access to the gym</li>
                            <li>1 classes per week</li>
                            <li>FREE drinking package</li>
                            <li>1 Free personal training</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Professional</h4>
                        <div class="price-plan">
                            <h2>95 <span>$</span></h2>
                            <p>Monthly</p>
                        </div>
                        <ul>
                            <li>Unlimited access to the gym</li>
                            <li>2 classes per week</li>
                            <li>FREE drinking package</li>
                            <li>2 Free personal training</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Get Started</a>
                        <div class="tic-text">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-price-plan">
                        <h4>Advanced</h4>
                        <div class="price-plan">
                            <h2>165 <span>$</span></h2>
                            <p>Monthly</p>
                        </div>
                        <ul>
                            <li>Unlimited access to the gym</li>
                            <li>6 classes per week</li>
                            <li>FREE drinking package</li>
                            <li>5 Free personal training</li>
                        </ul>
                        <a href="#" class="primary-btn price-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Price Plan Section End -->

    <!-- Choseus Section Begin -->
<!--     <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why People Choose Us</h2>
                        <p>Our sport experts and latest sports equipment are the winning combination.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-1.png" alt="">
                        <h5>Support 24/24</h5>
                        <p>One of the best ways to make a great vacation quickly horrible is to choose the wrong
                            accommodations for your trip. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-2.png" alt="">
                        <h5>Our trainer</h5>
                        <p>If you are an infrequent traveler you may need some tips to keep the wife happy while you are
                            jet setting around the globe.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-3.png" alt="">
                        <h5>Personalized sessions</h5>
                        <p>To succeed at any endeavor, you must stay the course…no matter what the cost! Here are some
                            surefire tips to help you on your journey.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-4.png" alt="">
                        <h5>Our equipment</h5>
                        <p>Rugby and Stratford-upon-Avon. Additionally, there are many things to see and do in and
                            around Coventry itself.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-5.png" alt="">
                        <h5>Classes daily</h5>
                        <p>We would just not have the will in us to go about our daily lives. Its motivation that helps
                            us get through the most mundane.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="img/icons/chose-icon-6.png" alt="">
                        <h5>Focus on your health</h5>
                        <p>But there is only so far we can go within the constraints of a family budget in building the
                            perfect telescopic operation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Choseus Section End -->

    <!-- Video Section Begin -->
<!--     <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Gym In Dowtown New York</h2>
                        <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Video Section End -->



    <!-- Cta Section Begin -->
    <!-- <section class="cta-section"> -->
        <!-- <div class="container"> -->
            <!-- <div class="row"> -->
                <!-- <div class="col-lg-12"> -->
                    <!-- <div class="cta-text"> -->
                        <!-- <h3>GeT Started Today</h3> -->
                        <!-- <p>New student special! $30 unlimited Gym for the first week anh 50% of our member!</p> -->
                    <!-- </div> -->
                    <!-- <a href="#" class="primary-btn cta-btn">book now</a> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </section> -->
    <!-- Cta Section End -->

    <!-- Map Section Begin -->
    <!-- <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd" height="590" style="border: 0" allowfullscreen=""></iframe>
        <div class="map-contact-detalis">
            <div class="open-time">
                <h5>Weekday:</h5>
                <ul>
                    <li>Weekday: <span>06:30 - 11:00</span></li>
                    <li>Saturday: <span>07:00 - 22:00</span></li>
                    <li>Sunday: <span>09:00 - 18:00</span></li>
                </ul>
            </div>
            <div class="map-contact-form">
                <h5>Contact Us</h5>
                <form action="#">
                    <input type="text" placeholder="Name">
                    <input type="text" class="phone" placeholder="Phone">
                    <textarea placeholder="Message"></textarea>
                    <button type="submit" class="site-btn">Submit Now</button>
                </form>
            </div>
        </div>
    </div> -->
    <!-- Map Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="padding-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-item">
                        <div class="f-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Despite growth of the Internet over the past seven years, the use of toll-free phone numbers
                            in television advertising continues.</p>
                        <div class="social-links">
                            <h6>Follow us</h6>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Our Blog</h5>
                        <div class="footer-blog">
                            <a href="#" class="fb-item">
                                <h6>Most people who work</h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>Freelance Design Tricks How </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>have a computer at home have had </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Program</h5>
                        <ul class="workout-program">
                            <li><a href="#">Bodybuilding</a></li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Streching</a></li>
                            <li><a href="#">Weight Loss</a></li>
                            <li><a href="#">Gym Fitness</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Get Info</h5>
                        <ul class="footer-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Phone:</span>
                                (12) 345 6789
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>Email:</span>
                                Colorlib.info@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Address</span>
                                Iris Watson, Box 283 8562, NY
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script type="application/javascript">

        new SSO_JS({
            config: {
                client_id: 'SFsZFHeP4dPDVm1xo8XzN1BWxlkAUPp4mCPfiExv',   // Compulsory
                scope: ['basic', 'profile', 'insti_address'],    // Optional. Default is  ['basic']
                state: 'user_logon', // Optional. Default None
                response_type: 'code',  // Optional. Default is 'code'
                redirect_uri: 'http://localhost/hostel-18/sso.php',    //Optional
                sso_root: document.getElementById('sso-root'),
                /* Optional
                 document.getElementById don't work if your element is not in light DOM. In that case you need to
                 provide selector here. In most of the cases this will work.
                 */
            },
            colors: { // All Optional
                button_div_bg_color: '303F9F', // Background color of button
                button_anchor_color: 'FFFFFF', // Font color of Button
                logout_anchor_color: '727272', // Font color of logout mark (The one with 'Login as other user'
            },
        }).init();

    </script>
<script>
  var $goTop = $('#go-top');
  var $customService = $('.customer-service');
  var customerMessage = $('#customer-message .message');

  $(window).scroll(function () {
    var winHeight = $(window).height();
    var scrollHeight = $(document).scrollTop();
    if (scrollHeight > winHeight) {
      $goTop.show();
      $customService.css('bottom', '40px');
    } else {
      $goTop.hide();
      $customService.css('bottom', '60px');
    }
  });

  $goTop.click(function () {
    $('html ,body').animate({scrollTop: 0}, 300);
  });

  if (/(iPhone|iPad|iPod|iOS|Android)/i.test(navigator.userAgent)) {
    $('.customer-service').hide();
  } else {
    $('.customer-service').show();
  }
</script>

<script src="https://www.mockplus.com/js/global.js?v=77"></script>
<script>
  (function insertInnerAd() {
    var parr = $('#post-content > p');
    var insertp;
    var $externalLink = $('.external-link');
    if (parr.length >= 10) {
      var num = Math.round(parr.length / 3);
      insertp = parr[num - 1];
      $externalLink.insertBefore(insertp);
    } else {
      $externalLink.remove();
    }
  })();

  //分享悬浮滚动
  function share() {
	  var winWidth = $(window).width();
	  if (winWidth > 999 ) {
          var docHeight = $(document).height();
          var top = $(document).scrollTop();
          if (top > docHeight - 1740 ) {
              $('.share-box').fadeOut(200);
          } else {
	          $('.share-box').fadeIn(200);
          }
      } else {
         $('.share-box').hide();
      }
  }

    $(window).scroll(function () {
      share();
    });



  //分享链接跳转
  var URL = window.location.href;
  var title = $('#blog-title').text();
  $('.twitter').click(function () {
	  var url = 'https://twitter.com/intent/tweet?text=' + encodeURIComponent(title.split('|')[0]) + ' @Mockplus&related=Mockplus&url=' + URL;
	  window.open(url, '_blank');
  });

  $('.facebook').click(function () {
	  var url = 'http://www.facebook.com/sharer.php?u=' + URL + '&t=' + title;
	  window.open(url, '_blank');
  });

  $('.ins').click(function () {
	  var url = 'https://www.linkedin.com/shareArticle?mini=true&url=' + URL;
	  window.open(url, '_blank');
  });
</script>
<script>
  // 搜索
  function blogSearch() {
    var region = 'blog';
    var keyword = $('.blog-search .text').val().trim();
    if (!keyword) {
        showMessage('Search query cannot be empty!');
      return;
    }
    window.location.href = '/' + region + '/search?q=' + keyword + '&page=1';
  }

  function onKeyPress(e) {
    let keyCode = null;
    if (e.which) {
      keyCode = e.which;
    } else if (e.keyCode) {
      keyCode = e.keyCode;
    }
    if (keyCode === 13) {
      blogSearch();
      return false;
    }
    return true;
  }

  $('#blog-search-submit').click(function () {
    blogSearch();
  });
  // 订阅
  $('#subscribe').click(function () {
    var email = $('#subscribe-email').val().trim();
    if (!email) {
      showMessage('Please input your email address.');
      return
    }
    $.post('/blog/subscribe', {
      email: email
    }, function (res) {
      if (res.code !== 0) {
        showMessage(res.message);
        return;
      }
      $('.subscribe-success').show();
      $('.subscribe').hide();
    })
  });
  var URL = 'https://www.mockplus.com/blog';
  var title = 'A selection of the best product design and UX/UI design resources | Mockplus Blog';
  var image = 'https://www.mockplus.com/images/Mockplus_share.png';

  $('#twitter').click(function () {
    var url = 'https://twitter.com/intent/tweet?text=' + encodeURIComponent(title.split('|')[0]) + ' @Mockplus&related=Mockplus&url=' + URL;
    window.open(url, '_blank');
  });

  $('#facebook').click(function () {
    var url = 'http://www.facebook.com/sharer.php?u=' + URL + '&t=' + title;
    window.open(url, '_blank');
  });

  $('#ins').click(function () {
    var url = 'https://www.linkedin.com/shareArticle?mini=true&url=' + URL;
    window.open(url, '_blank');
  });

  $('.close-dlg').click(function () {
    $('.dlg').hide();
  });

  $(function () {
    // 右侧mockplus、idoc分类跟随
    var recommendFlex = $('.blog-recommend-flex');
    var blogRight = $('.blog-right');

    function controlFlex() {
      var height = blogRight.height();
      var scrollTop = blogRight.offset().top;
      var scroll = $(window).scrollTop();
      var leftHeight = $('.blog-left').height();
      if (height + scrollTop < scroll) {
        recommendFlex.addClass('flex');
        if (scroll > leftHeight - 375) {
          recommendFlex.removeClass('flex');
        }
      } else {
        recommendFlex.removeClass('flex');
      }
    }

    $(window).scroll(function () {
      controlFlex();
    });
    $(window).resize(function () {
      controlFlex();
    });
  })
</script>
<script>
    $('.selbox').click(function (e) {
        if ($('.menu-list').css('display') === 'none') {
            $('.menu-list').show();
        } else {
            $('.menu-list').hide();
        }
        e.stopPropagation();
    })

    $('.scale-item').click(function () {
        var people = $(this).text();
        $('#scale').text(people);
        $('#scale').css('color','#353030');
        $('.menu-list').hide();
    })

    $('body').click(function () {
        $('.menu-list').hide();
    })
</script>
</body>
</html>