@extends('dashboard.layout.new-master')
@section('title','صفحه اصلی')
@section('content')
    <body class="bg-light style-default style-rounded">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>

    <!-- Sidenav -->
    <header class="sidenav" id="sidenav">

        <!-- close -->
        <div class="sidenav__close">
            <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
                <i class="ui-close sidenav__close-icon"></i>
            </button>
        </div>

        <!-- Nav -->
        <nav class="sidenav__menu-container">
            <ul class="sidenav__menu" role="menubar">
                <li>
                    <a href="#" class="sidenav__menu-url">صفحه اصلی</a>
                </li>


                <!-- Categories -->
                <li>
                    <a href="#" class="sidenav__menu-url">تکنولوژی</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">زیبایی و سلامت</a>
                </li>
                <li>
                    <a href="#" class="sidenav__menu-url">موبایل</a>
                </li>
            </ul>
        </nav>

        <div class="socials sidenav__socials">
            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                <i class="ui-facebook"></i>
            </a>
            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                <i class="ui-twitter"></i>
            </a>
            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                <i class="ui-google"></i>
            </a>
            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                <i class="ui-youtube"></i>
            </a>
            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                <i class="ui-instagram"></i>
            </a>
        </div>
    </header> <!-- end sidenav -->

    <main class="main oh" id="main">

        <!-- Top Bar -->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">

                    <!-- Top menu -->
                    <div class="col-lg-6">
                        <ul class="top-menu">
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">تبلیغات</a></li>
                            <li><a href="#">تماس با ما</a></li>
                        </ul>
                    </div>

                    <!-- Socials -->
                    <div class="col-lg-6">
                        <div class="socials nav__socials socials--nobase socials--white justify-content-start">
                            <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
                                <i class="ui-facebook"></i>
                            </a>
                            <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
                                <i class="ui-twitter"></i>
                            </a>
                            <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
                                <i class="ui-google"></i>
                            </a>
                            <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
                                <i class="ui-youtube"></i>
                            </a>
                            <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
                                <i class="ui-instagram"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end top bar -->

        <!-- Navigation -->
        <header class="nav">

            <div class="nav__holder nav--sticky">
                <div class="container relative">
                    <div class="flex-parent">

                        <!-- Side Menu Button -->
                        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
                            <span class="nav-icon-toggle__box">
                                <span class="nav-icon-toggle__inner"></span>
                            </span>
                        </button>

                        <!-- Logo -->
                        <a href="index.html" class="logo">
                            <img class="logo__img" src="img/logo_default.png" alt="logo">
                        </a>

                        <!-- Nav-wrap -->
                        <nav class="flex-child nav__wrap d-none d-lg-block">
                            <ul class="nav__menu">

                                <li class="active">
                                    <a href="index.html">صفحه اصلی</a>
                                </li>
                            </ul> <!-- end menu -->
                        </nav> <!-- end nav-wrap -->

                        <!-- Nav Right -->
                        <div class="nav__right">

                            <!-- Search -->
                            <div class="nav__right-item nav__search">
                                <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                    <i class="ui-search nav__search-trigger-icon"></i>
                                </a>
                                <div class="nav__search-box" id="nav__search-box">
                                    <form class="nav__search-form">
                                        <input type="text" placeholder="جستجو مقالات" class="nav__search-input">
                                        <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                            <i class="ui-search nav__search-icon"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end nav right -->

                    </div> <!-- end flex-parent -->
                </div> <!-- end container -->

            </div>
        </header> <!-- end navigation -->


        <div class="main-container container pt-40" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                <div class="col-lg-8 blog__content mb-72">
                    <h1 class="page-title">نمایش پست ها</h1>
                    @foreach($posts as $post)
                        @php
                            $url=$post->image->file;
                            $pic='storage/'.substr($url,'7');
                        @endphp
                        <article class="entry card post-list">
                            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{asset("$pic")}})">
                                <a href="single-post.html" class="thumb-url"></a>
                                <img src="{{asset("storage/images/image147-min-1089984970_1658178095.jpg")}}" alt="" class="entry__img d-none">
                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue"> {{'دسته بندی :'. ' '.$post->category->title}}</a>
                            </div>

                            <div class="entry__body post-list__body card__body">
                                <div class="entry__header">
                                    <h2 class="entry__title">
                                        <a href="single-post.html">{{$post->title}}</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>نویسنده:</span>
                                            <a href="#">{{$post->user->name}}</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>{{$post->short_content}}</p>
                                </div>
                            </div>
                        </article>
                @endforeach

                <!-- Pagination -->
                    <nav class="pagination">
                        <span class="pagination__page pagination__page--current">۱</span>
                        <a href="#" class="pagination__page">۲</a>
                        <a href="#" class="pagination__page">۳</a>
                        <a href="#" class="pagination__page">۴</a>
                        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>
                    </nav>
                </div> <!-- end posts -->

                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">

                    <!-- Widget Popular Posts -->
                    <aside class="widget widget-popular-posts">
                        <h4 class="widget-title">محبوب ترین مقالات</h4>
                        <ul class="post-list-small">
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="img/content/thumb/post-8.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">گوشی تاشو هواوی میت ایکس در تاریخ مقرر عرضه می‌شود</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#">بهرامی راد</a>
                                            </li>

                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="img/content/thumb/post-2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">نمایشگر وان پلاس ۷ قرار است ما را شگفت‌زده کند!</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#">بهرامی راد</a>
                                            </li>

                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="img/content/thumb/post-6.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">چرا لانچرهای اندروید دیگر محبوبیت گذشته را ندارند؟</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#">بهرامی راد</a>
                                            </li>

                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li class="post-list-small__item">
                                <article class="post-list-small__entry clearfix">
                                    <div class="post-list-small__img-holder">
                                        <div class="thumb-container thumb-100">
                                            <a href="single-post.html">
                                                <img data-src="img/content/thumb/post-5.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-list-small__body">
                                        <h3 class="post-list-small__entry-title">
                                            <a href="single-post.html">۵ کتاب روانشناسی که برای زندگی بهتر باید بخوانید</a>
                                        </h3>
                                        <ul class="entry__meta">
                                            <li class="entry__meta-author">
                                                <span>نویسنده:</span>
                                                <a href="#">بهرامی راد</a>
                                            </li>

                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </aside> <!-- end widget popular posts -->
                    <!-- Widget Ad 300 -->
                    <aside class="widget widget_media_image">
                        <a href="#">
                            <img src="img/content/mag-1.jpg" alt="">
                        </a>
                    </aside> <!-- end widget ad 300 -->

                </aside> <!-- end sidebar -->

            </div> <!-- end content -->
        </div> <!-- end main container -->
@endsection