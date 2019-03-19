<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>saeed</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body >
<!-- Preloader Start -->
<div id="preloader">
    <div class="colorlib-load"></div>
</div>

<!-- ***** Header Area Start ***** -->
<header   class="header_area animated">
    <div class="container-fluid">
        <div style="direction:rtl" class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12 col-lg-9">
                <div  class="menu_area">
                    <nav  class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">Ca.</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div  class="collapse navbar-collapse" id="ca-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item active"><a class="nav-link" href="#home">خانه</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about">درباره ما</a></li>
                                <li class="nav-item"><a class="nav-link" href="#features">ویژگی ها</a></li>
                                <li class="nav-item"><a class="nav-link" href="#screenshot">دمو</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pricing">قیمت</a></li>
                                <li class="nav-item"><a class="nav-link" href="#testimonials">تست</a></li>
                                <li class="nav-item"><a class="nav-link" href="#team">تیم سازنده</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">ارتباط با ما</a></li>
                            </ul>
                            <div class="sing-up-button d-lg-none">
                                <a href="#">عضویت رایگان</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Signup btn -->
            <div class="col-12 col-lg-3">
                <div  class="sing-up-button d-none d-lg-block">
                    <a style="float: left"   href="{{ route('login') }}">ورود</a>
                    <a href="{{ route('register') }}">عضویت رایگان</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix" id="home">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <div class="wellcome-heading">
                    <h2>موبویاب</h2>
                    <h3>M</h3>
                    <p>دسترسی آسان به گوشی گمشده</p>
                </div>
                <div class="get-start-area">
                    <!-- Form Start -->
                    <form action="#" method="post" class="form-inline">
                        <input type="email" class="form-control email" placeholder="ایمیل خود را وارد کنید">
                        <input type="submit" class="submit" value="ارسال">
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->
    <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
        <img src="img/bg-img/welcome-img.png" alt="">
    </div>
</section>
<!-- ***** Wellcome Area End ***** -->

<!-- ***** Special Area Start ***** -->
<section class="special-area bg-white section_padding_100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="section-heading text-center">
                    <h2>چرا ما را انتخاب کنید</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-icon">
                        <i class="ti-mobile" aria-hidden="true"></i>
                    </div>
                    <h4>دسترسی آسان</h4>
                    <p>شما می توانید به راحتی با متصل شدن با اینترنت در هرجا در رایانه شخصی خودتون یا موبایل تون از طریق اپلیکیشن یا سایت به ما متصل بشین</p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-icon">
                        <i class="ti-ruler-pencil" aria-hidden="true"></i>
                    </div>
                    <h4>طراحی قدرتمند</h4>
                    <p>ما سایت و اپلیکیشینی بسیار زیبا و کارآمد برای شما طراحی کردیم</p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-icon">
                        <i class="ti-settings" aria-hidden="true"></i>
                    </div>
                    <h4>درآمدزایی</h4>
                    <p>شما می تونید از طریق معرفی اپلیکیشن کسب درآمد کنید و از طریق کد خودتون اقدام به انتشار اپ کنین</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Special Description Area -->
    <div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="special_description_img">
                        <img src="img/bg-img/special.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="special_description_content">
                        <h2 style="direction: rtl">بهترین اپلیکیشن برای شما</h2>
                        <p>شما می تونید از طریق لینک های زیر اقدام به دانلود اپلیکیشن کنین و در برنامه ما ثبت نام کنین</p>
                        <div class="app-download-area">
                            <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Google Store Btn -->
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <p class="mb-0"><span>available on</span> Google Store</p>
                                </a>
                            </div>
                            <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                <!-- Apple Store Btn -->
                                <a href="#">
                                    <i class="fa fa-apple"></i>
                                    <p class="mb-0"><span>available on</span> Apple Store</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Special Area End ***** -->

<!-- Feature-Area -->
<section class="feature-area section-padding-top" id="features_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div style="margin-left: 350px" class="page-title text-center">
                    <h5 class="title">ویژگی های</h5>
                    <div class="space-10"></div>
                    <h3>قدرتمند و منحصربه فرد</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div style="direction: rtl" class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i class="lnr lnr-rocket"></i>
                    </div>
                    <h4>سریع &amp; قدرتمند</h4>
                    <p>شما می تونید در یک چشم به هم زدن اقدام به کنترل کنین</p>
                </div>
                <div class="space-60"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box-icon">
                        <i class="lnr lnr-paperclip"></i>
                    </div>
                    <h4>ویرایش آسان</h4>
                    <p>شما می تونید در یک چشم به هم زدن اقدام به کنترل کنین</p>
                </div>
                <div class="space-60"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="lnr lnr-cloud-download"></i>
                    </div>
                    <h4>فضای ابری</h4>
                    <p>شما می تونید در یک چشم به هم زدن اقدام به کنترل کنین</p>
                </div>
                <div class="space-60"></div>
            </div>
            <div class="hidden-xs hidden-sm col-md-4">
                <figure class="mobile-image">
                    <img src="img/bg-img/feature-image.png" alt="Feature Photo">
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i class="lnr lnr-clock"></i>
                    </div>
                    <h4>آگاه بشین !</h4>
                    <p>شما می تونید در یک چشم به هم زدن اقدام به کنترل کنین</p>
                </div>
                <div class="space-60"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box-icon">
                        <i class="lnr lnr-laptop-phone"></i>
                    </div>
                    <h4>کاملا منعطف</h4>
                    <p>شما می تونید در یک چشم به هم زدن اقدام به کنترل کنین</p>
                </div>
                <div class="space-60"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="lnr lnr-cog"></i>
                    </div>
                    <h4>زیبایی ظاهری</h4>
                    <p>شما می تونید در یک چشم به هم زدن اقدام به کنترل کنین</p>
                </div>
                <div class="space-60"></div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Video Area Start ***** -->
<div class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Video Area Start -->
                <div class="video-area" style="background-image: url(img/bg-img/video.jpg);">
                    <div class="video-play-btn">
                        <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Video Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
<section class="cool_facts_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h3><span class="counter">90</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-arrow-down-a"></i>
                        <p>تعداد <br> دانلود</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-area">
                        <h3><span class="counter">120</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-happy-outline"></i>
                        <p>رضایت <br> کاربران</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-area">
                        <h3><span class="counter">40</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-person"></i>
                        <p>اکانت <br>فعال</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-area">
                        <h3><span class="counter">10</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-ios-star-outline"></i>
                        <p>رتبه <br>اپلیکیشن</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** App Screenshots Area Start ***** -->
<section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>محیط برنامه</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- App Screenshots Slides  -->
                <div class="app_screenshots_slides owl-carousel">
                    <div class="single-shot">
                        <img src="img/scr-img/app-1.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-2.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-3.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-4.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-5.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="img/scr-img/app-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** App Screenshots Area End *****====== -->

<!-- ***** Pricing Plane Area Start *****==== -->
<section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text  -->
                <div class="section-heading text-center">
                    <h2>پلن های برنامه</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>پلن های برنامه</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>تومان</span>
                            <h4>29000</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>ماهیانه</p>
                        <p>اپدیت نامحدود</p>
                        <p>دسترسی رایگان</p>
                        <p>پیشتیبانی کامل</p>
                        <p>تک کاربره</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button">
                        <a href="#">انتخاب پنل</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>پلن های برنامه</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>تومان</span>
                            <h4>29000</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>ماهیانه</p>
                        <p>اپدیت نامحدود</p>
                        <p>دسترسی رایگان</p>
                        <p>پیشتیبانی کامل</p>
                        <p>تک کاربره</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button">
                        <a href="#">انتخاب پنل</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan active text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>پلن های برنامه</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>تومان</span>
                            <h4>29000</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>ماهیانه</p>
                        <p>اپدیت نامحدود</p>
                        <p>دسترسی رایگان</p>
                        <p>پیشتیبانی کامل</p>
                        <p>تک کاربره</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button">
                        <a href="#">انتخاب پنل</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <!-- Package Price  -->
                <div class="single-price-plan text-center">
                    <!-- Package Text  -->
                    <div class="package-plan">
                        <h5>پلن های برنامه</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>تومان</span>
                            <h4>29000</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>ماهیانه</p>
                        <p>اپدیت نامحدود</p>
                        <p>دسترسی رایگان</p>
                        <p>پیشتیبانی کامل</p>
                        <p>تک کاربره</p>
                    </div>
                    <!-- Plan Button  -->
                    <div class="plan-button">
                        <a href="#">انتخاب پنل</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ***** Pricing Plane Area End ***** -->

<!-- ***** Client Feedback Area Start ***** -->
<section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="slider slider-for">
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>ما بهترین ها را برای شما در نظر داریم</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Aigars Silkalns</h5>
                            <p>Ceo Colorlib</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Jennifer</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job.”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Helen</h5>
                            <p>Marketer</p>
                        </div>
                    </div>
                    <!-- Client Feedback Text  -->
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Henry smith</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Client Thumbnail Area -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="slider slider-nav">
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-3.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-2.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-1.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="img/bg-img/client-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Client Feedback Area End ***** -->

<!-- ***** CTA Area Start ***** -->
<section class="our-monthly-membership section_padding_50 clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="membership-description">
                    <h2>به ما بپیوندید</h2>
                    <p>به راحتی گوشی خود را پیدا کنید</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                    <a href="#">شروع کنید</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** CTA Area End ***** -->

<!-- ***** Our Team Area Start ***** -->
<section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>تیم ما</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="img/team-img/team-1.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Jackson Nash</h4>
                        <p>Tax Advice</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="img/team-img/team-2.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Alex Manning</h4>
                        <p>CEO-Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="img/team-img/team-3.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Ollie Schneider</h4>
                        <p>Business Planner</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="img/team-img/team-4.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Roger West</h4>
                        <p>Financer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Our Team Area End ***** -->

<!-- ***** Contact Us Area Start ***** -->
<section class="footer-contact-area section_padding_100 clearfix" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>با ما در ارتباط باشید</h2>
                    <div class="line-shape"></div>
                </div>
                <div class="footer-text">
                    <p>پیام خود را برای ما بگذارید</p>
                </div>
                <div class="address-text">
                    <p><span>آدرس:</span> ایران ، مشهد</p>
                </div>
                <div class="phone-text">
                    <p><span>تلفن تماس:</span> +11-225-888-888-66</p>
                </div>
                <div class="email-text">
                    <p><span>ایمیل:</span> info.deercreative@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Form Start-->
                <div class="contact_from">
                    <form action="#" method="post">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-12">
                                    <button type="submit" class="btn submit-btn">Send Now</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area End ***** -->

<!-- ***** Footer Area Start ***** -->
<footer class="footer-social-icon text-center section_padding_70 clearfix">
    <!-- footer logo -->
    <div class="footer-text">
        <h2>Ca.</h2>
    </div>
    <!-- social icon-->
    <div class="footer-social-icon">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    </div>
    <div class="footer-menu">
        <nav>
            <ul>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">مقررات</a></li>
                <li><a href="#">تیم سازنده</a></li>
                <li><a href="#">ارتباط با ما</a></li>
            </ul>
        </nav>
    </div>
    <!-- Foooter Text-->
    <div class="copyright-text">
        <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
        <p>ساخته شده توسط <a href="https://123ali.ir" target="_blank">علی ابراهیم پور</a></p>
    </div>
</footer>
<!-- ***** Footer Area Start ***** -->

<!-- Jquery-2.2.4 JS -->
<script src="js/jquery.min.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap-4 Beta JS -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins JS -->
<script src="js/plugins.js"></script>
<!-- Slick Slider Js-->
<script src="js/slick.min.js"></script>
<!-- Footer Reveal JS -->
<script src="js/footer-reveal.min.js"></script>
<!-- Active JS -->
<script src="js/active.js"></script>
</body>

</html>
