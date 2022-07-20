@extends('dashboard.layout.new-master')
@section('title','تک پست')
@section('content')
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
                                    <a href="/index">صفحه اصلی</a>
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

        <!-- Breadcrumbs -->
        <div class="container">
            <ul class="breadcrumbs">

            </ul>
        </div>

        <div class="main-container container" id="main-container">

            <!-- Content -->
            <div class="row">

                <!-- post content -->
                <div class="col-lg-8 blog__content mb-72">
                    <div class="content-box">

                        <!-- standard post -->
                        <article class="entry mb-0">
                            @php
                                $urlp=$post->image->file;
                                $picpost='storage/'.substr($urlp,'7');
                                $upic=$post->user->image->file;
                                $picuser='storage/'.substr($upic,'7');
                            @endphp
                            <div class="single-post__entry-header entry__header">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{$post->category->title}}</a>
                                <h1 class="single-post__entry-title">
                                    {{$post->title}}
                                </h1>
                                <div class="entry__img-holder">
                                    <img  src="{{asset("$picpost")}}" alt="" class="entry__img">
                                </div>
                                <!-- Author -->
                                <div class="entry-author clearfix">

                                    <img alt=""  src="{{asset("$picuser")}}" class="avatar lazyload">
                                    <div class="entry-author__info">
                                        <h6 class="entry-author__name">
                                            <a href="#">{{$post->user->name}}</a>
                                        </h6>
                                        <p class="mb-0">{{$post->content}}</p>
                                    </div>
                                </div>

                                <!-- Related Posts -->


                        </article> <!-- end standard post -->

                        <!-- Comments -->
                        <div class="entry-comments">
                            <div class="title-wrap title-wrap--line">
                                <h3 class="section-title">۳ دیدگاه</h3>
                            </div>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-avatar">
                                            <img alt="" src="img/default-avatar.png">
                                        </div>
                                        <div class="comment-text">
                                            <h6 class="comment-author">بهرامی راد</h6>
                                            <div class="comment-metadata">
                                                <a href="#" class="comment-date">۴ اردیبهشت ۱۳۹۸</a>
                                            </div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                            <a href="#" class="comment-reply">پاسخ</a>
                                        </div>
                                    </div>

                                    <ul class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-avatar">
                                                    <img alt="" src="img/default-avatar.png">
                                                </div>
                                                <div class="comment-text">
                                                    <h6 class="comment-author">حامد</h6>
                                                    <div class="comment-metadata">
                                                        <a href="#" class="comment-date">۴ اردیبهشت ۱۳۹۸</a>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                                    <a href="#" class="comment-reply">پاسخ</a>
                                                </div>
                                            </div>
                                        </li> <!-- end reply comment -->
                                    </ul>

                                </li> <!-- end 1-2 comment -->

                                <li>
                                    <div class="comment-body">
                                        <div class="comment-avatar">
                                            <img alt="" src="img/default-avatar.png">
                                        </div>
                                        <div class="comment-text">
                                            <h6 class="comment-author">علی</h6>
                                            <div class="comment-metadata">
                                                <a href="#" class="comment-date">۴ اردیبهشت ۱۳۹۸</a>
                                            </div>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                                            <a href="#" class="comment-reply">پاسخ</a>
                                        </div>
                                    </div>
                                </li> <!-- end 3 comment -->

                            </ul>
                        </div> <!-- end comments -->

                        <!-- Comment Form -->
                        <div id="respond" class="comment-respond">
                            <div class="title-wrap">
                                <h5 class="comment-respond__title section-title">دیدگاه شما</h5>
                            </div>
                            <form id="form" class="comment-form" method="post" action="#">
                                <p class="comment-form-comment">
                                    <label for="comment">دیدگاه</label>
                                    <textarea id="comment" name="comment" rows="5" required="required"></textarea>
                                </p>

                                <div class="row row-20">
                                    <div class="col-lg-4">
                                        <label for="name">نام: *</label>
                                        <input name="name" id="name" type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="comment">ایمیل: *</label>
                                        <input name="email" id="email" type="email">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="comment">وبسایت:</label>
                                        <input name="website" id="website" type="text">
                                    </div>
                                </div>

                                <p class="comment-form-submit">
                                    <input type="submit" class="btn btn-lg btn-color btn-button" value="ارسال دیدگاه" id="submit-message">
                                </p>

                            </form>
                        </div> <!-- end comment form -->

                    </div> <!-- end content box -->
                </div> <!-- end post content -->

                <!-- Sidebar -->
                <aside class="col-lg-4 sidebar sidebar--right">

                    <!-- Widget Popular Posts -->
                    <aside class="widget widget-popular-posts">
                        <h4 class="widget-title">جدید ترین مقالات</h4>
                        <ul class="post-list-small">
                            @foreach($endposts as $post)
                                @php
                                    $urlp=$post->image->file;
                                    $picpost='storage/'.substr($urlp,'7');
                                @endphp
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-100">
                                                <a href="{{route('index.show',['post'=> $post->id])}}">
                                                    <img data-src="{{asset("$picpost")}}" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-list-small__body">
                                            <h3 class="post-list-small__entry-title">
                                                <a href="{{route('index.show',['post'=> $post->id])}}">{{$post->title}}</a>
                                            </h3>
                                            <ul class="entry__meta">
                                                <li class="entry__meta-author">
                                                    <span>نویسنده:</span>
                                                    <a href="#">{{$post->user->name}}</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
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
