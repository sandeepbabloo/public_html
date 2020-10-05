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
    <title>Activitar | Template</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                            <li ><a href="index.php" >Home</a></li>
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
                            <li class="active"><a href="contact.php">Reach Us</a></li>
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

    <!-- Map Section Begin -->
    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d188618.51311104256!2d-71.236572!3d42.381647!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1576756626784!5m2!1sen!2sbd"
            height="530" style="border: 0" allowfullscreen=""></iframe>
        <div class="map-hover">
            <h5>New York</h5>
            <ul>
                <li>Weekdays: 10.00 - 23.00</li>
                <li>Saturday: 10.00 - 23.00</li>
                <li>Sunday: Close</li>
            </ul>
            <i class="icon_pin"></i>
        </div>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact-info">
                        <h4>Information</h4>
                        <ul>
                            <li><i class="fa fa-phone"></i>(12)-100-100-100</li>
                            <li><i class="fa fa-envelope"></i>Info.colorlib@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact-address">
                        <h4>Address</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Iris Watson, Mary land, United State., New York City
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="contact-form">
                        <h4>Get in touch</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="c-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
    <footer class="footer-section">
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
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
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