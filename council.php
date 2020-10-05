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
    <title>Council | Hostel 18</title>

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
    <link rel="stylesheet" href="https://www.mockplus.com/css/icon/iconfont.css?v=77">
    <link rel="stylesheet" href="https://www.mockplus.com/enUS/css/global.css?v=77">
    <link rel="stylesheet" href="https://www.mockplus.com/enUS/css/blog.css?v=77">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

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
                            <li><a href="index.php" >Home</a></li>
                            <li class="active"><a href="council.php">Council & Staff</a></li>
                            <li><a href="schedule.php">Documents</a> <ul class="dropdown">
                                    <li><a href="about-us.html">Hostel Rules</a></li>
                                    <li><a href="./blog-single.html">Election Document</a></li>
                                    <li><a href="./blog-single.html">MOM</a></li>
                                    <li><a href="./blog-single.html">Guest Room Policy</a></li>
                                </ul>
                            </li>
                            <li><a href="./facilities.php">Facilities Available</a></li>
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
                                    <a href="https://support.iitb.ac.in">Support Portal</a>
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
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg spad" data-setbg="img/about-bread.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="breadcrumb-controls">
                            <a href="#"><i class="fa fa-home"></i> Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Aboutus Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="aboutus-page-text">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 m-auto">
                        <div class="section-title">
                            <h2>Who we Are & What We Do</h2>
                            <p>CrossFit is a cutting-edge functional fitness system that can help everyday men. There is
                                a significant portion of the population here in North America, that actually want
                                and need success to be hard!</p>
                        </div>
                    </div>
                </div>
                <img src="img/about-us.jpg" alt="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-us">
                            <h4>ABOUT US</h4>
                            <p>Having a baby can be a nerve wracking experience for new parents – not the nine
                                months of pregnancy, I’m talking about after the infant is brought home from the
                                hospital. It’s always the same thing, by the time they have their third child
                                they have it all figured out, but with number one it’s a learning thing.</p>
                            <p>Baby monitors help you hear your baby’s needs without you having to be in the
                                room with the baby. Some baby monitors are portable, or “mobile” and are small
                                enough that you can carry it in your pocket as you do your daily chores around
                                the house. Depending on your price range it’s best to have a base unit that
                                plugs into the wall. The receiving unit can be like your portable phone, you can
                                carry it around with you, and plug it back into the base unit to be recharged.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-quality">
                            <h4>OUR QUALITY</h4>
                            <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna
                                at risus auctor purus unt pretium ligula rutrum integer sapien ultrice ligula
                                luctus undo magna risus </p>
                            <ul>
                                <li><i class="fa fa-check-circle-o"></i>Lorem ipsum dolor sitdoni amet,
                                    consectetur dont adipis elite vivamus interdum.</li>
                                <li><i class="fa fa-check-circle-o"></i>Integer pulvinar ante nulla, ac
                                    fermentum ex congue id vestibulum ensectetur.</li>
                                <li><i class="fa fa-check-circle-o"></i>Proin blandit nibh in quam semper
                                    iaculis lorem ipsum dolor salama ender.</li>
                                <li><i class="fa fa-check-circle-o"></i>Quis ipsum suspendisse ultrices gravida.
                                    Risus commodo viverra maecenas accumsan lacus vel facilisis. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Aboutus Section End -->

    <!-- Testimonial Section End -->
    <!-- <section class="testimonial-section set-bg spad" data-setbg="img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4>The “Minimal-Repair Technique” is a revolutionary surgical procedure in the treatment
                                for hernia. Initially intended for correcting inguinal hernia.</h4>
                            <div class="author-name">
                                <h5>Stacy Mc Neeley</h5>
                                <span>CEP’s Director</span>
                            </div>
                            <div class="author-pic">
                                <img src="img/author-pic.png" alt="">
                            </div>
                        </div>
                        <div class="ts-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4>The “Minimal-Repair Technique” is a revolutionary surgical procedure in the treatment
                                for hernia. Initially intended for correcting inguinal hernia.</h4>
                            <div class="author-name">
                                <h5>Stacy Mc Neelek</h5>
                                <span>CEP’s Director</span>
                            </div>
                            <div class="author-pic">
                                <img src="img/author-pic.png" alt="">
                            </div>
                        </div>
                        <div class="ts-item">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4>The “Minimal-Repair Technique” is a revolutionary surgical procedure in the treatment
                                for hernia. Initially intended for correcting inguinal hernia.</h4>
                            <div class="author-name">
                                <h5>Stacy Mc Neelel</h5>
                                <span>CEP’s Director</span>
                            </div>
                            <div class="author-pic">
                                <img src="img/author-pic.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Testimonial Section End -->

    <!-- Trainer Section Begin -->
    <section class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>COUNCIL MEMBERS</h2>
                        <p>Our council works tirelessly to keep the hostel culture and entusiasm within</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="ti-pic">
                            <img src="img/trainer/trainer-1.jpg" alt="">
                            <div class="ti-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="callto:8454932040"><i class="fa fa-mobile"></i></a>

                            </div>
                            <div class="trainer-text">
                                <h5>Saurabh Rai<span> - General Secretary</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="ti-pic">
                            <img src="img/trainer/trainer-2.jpg" alt="">
                            <div class="ti-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="callto:8454932040"><i class="fa fa-mobile"></i></a>
                            </div>
                            <div class="trainer-text">
                                <h5>Noah Leonard <span>- Trainer</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="ti-pic">
                            <img src="img/trainer/trainer-3.jpg" alt="">
                            <div class="ti-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="callto:8454932040"><i class="fa fa-mobile"></i></a>
                            </div>
                            <div class="trainer-text">
                                <h5>Evelyn Fields <span>- Gymer</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trainer-item">
                        <div class="ti-pic">
                            <img src="img/trainer/trainer-4.jpg" alt="">
                            <div class="ti-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="callto:8454932040"><i class="fa fa-mobile"></i></a>

                            </div>
                            <div class="trainer-text">
                                <h5>Leroy Guzman <span>- Manager</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3>GeT Started Today</h3>
                        <p>New student special! $30 unlimited Gym for the first week anh 50% of our member!</p>
                    </div>
                    <a href="#" class="primary-btn cta-btn">book now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="padding-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-item">
                        <div class="f-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
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
                    <!-- <div class="footer-widget">
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
                    </div> -->
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Program</h5>
                        <ul class="workout-program">
                            <li><a href="#">Council</a></li>
                            <li><a href="#">Forms</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Reach Us</a></li>
                            <li><a href="#"></a></li>
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
                                Hostel 18, IIT Bombay
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
                        <div class="ct-inside">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a></div>
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
</body>

</html>