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
    <title>Hostel 18 Facilities </title>

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
<!--     <script src="https://www.mockplus.com/js/lib/jquery-1.11.2.min.js"></script>
    <script src="https://www.mockplus.com/js/pagination.js"></script>
    <script src="https://www.mockplus.com/js/global.js?v=77"></script> -->
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
                        <li class="active"><a href="facilities.php">Facilities Available</a></li>
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
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-controls">
                        <ul>
                            <li class="active" data-filter="*"><a href="#mess">MESS</a></li>
                            <li class="active" data-filter="*"><a href="#shop">SHOP</a></li>
                            <li class="active" data-filter="*">LAUNDARY</li>
                            <li class="active" data-filter="*">SPORTS</li>
                            <li class="active" data-filter="*">OTHERS</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

    <section class="home-about spad">

    <h2 style="color: bisque;">H18 FACILITIES</h2>
    
        <div class="container">
            <div class="row" id="mess">
                <div class="col-lg-8" >
                    <div class="about-text">
                        <h2>MESS</h2>
                        <p class="short-details">Charges</p>
                        <p class="long-details">Charges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges DetailsCharges Details</p>
                        <p class="short-details">Vendor</p>
                        <p class="long-details">Vendor Details</p>
                        <p class="short-details">Mess Menu</p>
                        <p class="long-details">Mess Menu Link</p>
                        <p class="short-details">Contract</p>
                        <p class="long-details">Contract details(expiry)</p>
                        <p class="short-details">Mess Timing and Seating Capacity</p>
                        <p class="long-details">Details</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/recent-1.jpg">
                </div>
            </div>

            <div class="row" id="shop">
                <div class="col-lg-8">
                    <div class="about-text">
                        <h2>STATIONARY SHOP</h2>
                        <p class="short-details">Vendor</p>
                        <p class="long-details">Vendor Details</p>
                        <p class="short-details">Charges</p>
                        <p class="long-details">Charges Details</p>
                        <p class="short-details">Contract</p>
                        <p class="long-details">Contract details(expiry)</p>
                        <p class="short-details">Seating Capacity</p>
                        <p class="long-details">Details</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/home-about.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="about-text">
                        <h2>LAUNDARY (IRONING)</h2>
                        <p class="short-details">Operator</p>
                        <p class="long-details">Vendor Details</p>
                        <p class="short-details">Charges</p>
                        <p class="long-details">Charges Details</p>
                        <p class="short-details">Timings</p>
                        <p class="long-details">Details</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/home-about.jpg">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="about-text">
                        <h2>SPORTS</h2>
                        <p class="short-details">Items on Issue</p>
                        <p class="long-details">TT</p>
                        <p class="long-details">Badminton</p>
                        <p class="long-details">Foseball</p>
                        <p class="long-details">Pool</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/home-about.jpg">
                </div>
            </div>

        </div>
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="padding-bottom:0px">  } else {
          $('header').css({"boxShadow":"none"});
          $('header').css({"backgroundColor":"transparent"});
           $('.iconfont').css({"Color":"#fff"});
      }
  });

  adHeader();

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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65309978-1', 'auto');
  ga('send', 'pageview');
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