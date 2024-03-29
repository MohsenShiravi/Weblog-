<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('front/img/apple-icon.png')}}">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="{{asset('front/js/lazysizes.min.js')}}"></script>

</head>
@yield('content')

<!-- Footer -->
<footer class="footer footer--light">
    <div class="container">
        <div class="footer__widgets">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <aside class="widget widget-logo">
                        <a href="index.html">
                            <img src="{{asset('front/img/logo_default_white.png')}}" srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                        </a>
                        <p class="copyright">

                            استفاده از مطالب تاپ‌کالا مگ برای مقاصد غیرتجاری با ذکر نام تاپ‌کالا مگ و لینک به منبع بلامانع است. حقوق این سایت به شرکت نوآوران فن‌آوازه (فروشگاه آنلاین تاپ‌کالا) تعلق دارد.

                        </p>
                        <div class="socials socials--large socials--rounded mb-24">
                            <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                            <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                            <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                            <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                            <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-2 col-md-6">
                    <aside class="widget widget_nav_menu">
                        <h4 class="widget-title">هشتگ های داغ</h4>
                        <ul>
                            <li><a href="about.html">#تکنولوزی</a></li>
                            <li><a href="contact.html">#موبایل</a></li>
                            <li><a href="categories.html">#کتاب</a></li>
                            <li><a href="shortcodes.html">#هنر</a></li>
                            <li><a href="shortcodes.html">#زیبایی</a></li>
                            <li><a href="shortcodes.html">#دیجیتال</a></li>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-4 col-md-6">
                    <aside class="widget widget-popular-posts">

                        <ul class="post-list-small">

                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="{{asset('front/img/content/thumb/post-2.jpg')}}" src="{{asset('front/img/empty.png')}}" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>

                                </article>
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="col-lg-3 col-md-6">
                    <aside class="widget widget_mc4wp_form_widget">
                        <h4 class="widget-title">خبرنامه</h4>
                        <p class="newsletter__text">
                            <i class="ui-email newsletter__icon"></i>
                            برای اطلاع از آخرین خبرها مشترک شوید
                        </p>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="form-group">
                                    <input type="email" name="EMAIL" placeholder="ایمیل" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-lg btn-color" value="عضویت">
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>

            </div>
        </div>
    </div> <!-- end container -->
</footer> <!-- end footer -->

<div id="back-to-top">
    <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
</div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/easing.min.js')}}"></script>
<script src="{{asset('front/js/owl-carousel.min.js')}}"></script>
<script src="{{asset('front/js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('front/js/twitterFetcher_min.js')}}"></script>
<script src="{{asset('front/js/jquery.newsTicker.min.js')}}"></script>
<script src="{{asset('front/js/modernizr.min.js')}}"></script>
<script src="{{asset('front/js/scripts.js')}}"></script>

</body>
@yield('page_script')
</html>
