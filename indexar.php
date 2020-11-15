<?php
session_start();
  
?>
<!DOCTYPE html>
<html lang="en-gb" class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>صحتى</title>
<link rel="icon" type="image/gif/png" href="images/title.png">

<!-- BootStrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Main Styles -->
<link href="css/styles.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<!--main css-->
<link href="css/main.css" rel="stylesheet">
</head>

<body>
    <!--navbar-header-->
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <!--navbar-collapse-->
        <button type="button" id="nav-toggle" class="navbar-toggle menu" data-toggle="collapse" data-target="#main-nav"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button>
        <img src="images/S7ty2.png" class="mLogo">
          </div>
      <!--/.navbar-header-->
      <div id="main-nav" style="font-size: 22px;" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">الرئيسية</a></li>
          <li><a href="#services" class="scroll-link">الخدمات</a></li>
          <li><a href="login.php" class="scroll-link">خروج</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
  
<!--first section (contains banner & headline)-->  
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
      <img src="images/banner-bg.jpg" alt="banner"  />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="font-size: 40px;">نحن نساعدك لتكون افضل</h1>
        <a href="#basics" class="arrow-link" style="z-index: 2"> <i class="fa fa-arrow-circle-down fa-2x"></i> </a> 
      </div>
    </div>
  </div>
</section>
    <!--/ first section (contains banner & headline)-->
    
    
<!--services Section-->

<section id="services" class="page-section colord">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>خدماتنا</h2>
      <p>يمكنك اختيار الخدمة التى تريدها من هنا</p>
    </div>
    <div class="row"> 
      <!-- Booking Item -->
      <div class="bookingar">
      <div class="col-md-4 text-center c1"> 
        <i class="fa fa-user-md fa-2x circle"></i>
        <h3><span class="id-color">الحجز</span></h3>
        <p>احجز ميعاد الطبيب الاقرب اليك و اعرف ما هو اقرب مشفى اليك</p>
          </div>
      </div>
      <!-- end: --> 
      
      <!-- Electronic Archive Item -->
     <div class="electronicArchivear">
      <div class="col-md-4 text-center c1"> 
      <i class="fa fa-archive fa-2x circle"></i>
        <h3><span class="id-color">السجل الطبى</span></h3>
        <p>يمكنك معرفة تاريخك الطبى بالكامل من هنا و الاستغناء عن جميع الروشتات الورقية</p>
      </div>
     </div>
      <!-- end: --> 
      
      <!-- Blood Bank Item -->
        <div class="bloodBankar">
      <div class="col-md-4 text-center c1"> 
        <i class="fa fa-tint fa-2x circle"></i>
        <h3><span class="id-color">بنك الدم</span></h3>
        <p>اذا كنت تبحث عن دم و لا تجد فصيلتك فى اقرب مكان اليك , هنا مكانك</p>
      </div>
        </div>
      <!-- end: --> 
    </div>
  </div>
  <!--/.container--> 
</section>
    
    
    <!--copyRights Section-->

<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> حقوق الطبع 2018 | جميع الحقوق محفوظة
          <a href="index.php" style="font-size: 20px;">صحتى</a> 
        <div class="text-right" style="cursor: pointer;" >
        <a href="indexar.php" style="text-decoration: none;">AR |</a> <a href="index.php" class="active" style="text-decoration: none;">| EN</a>
      </div>
        </div>
    </div>
    </div>
    </section>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--Scripts-->
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<!-- custom js file -->
<script src="js/main.js"></script>
<!--/ custom js file -->
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
