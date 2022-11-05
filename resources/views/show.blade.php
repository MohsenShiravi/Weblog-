@extends('layouts.master')
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
                                    <form class="nav__search-form" action="{{route('search')}}" method="get">
                                        <input type="text" placeholder="جستجو مقالات" name="search" class="nav__search-input"><br>
                                        <div class="form-group">
                                            <lable>جستجو بر اساس</lable>
                                            <select name="field" class="nav__search-input">
                                                <lable>جستجو بر اساس</lable>
                                                <option value="title">عنوان پست</option>
                                                <option value="content">متن پست</option>
                                            </select>
                                        </div>
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
                            <div class="single-post__entry-header entry__header">
                                <a href="categories.html" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{$post->category->title}}</a>
                                <h1 class="single-post__entry-title">
                                    {{$post->title}}
                                </h1>
                                <div class="entry__img-holder">
                                    <img  src="{{$post->image->file}}" alt="" class="entry__img">
                                </div>
                                <!-- Author -->
                                <div class="entry-author clearfix">

                                    <img alt=""  src="{{$post->user->image->file}}" class="avatar lazyload">
                                    <div class="entry-author__info">
                                        <h6 class="entry-author__name">
                                            <a href="#">{{$post->user->name}}</a>
                                        </h6>
                                        <p class="mb-0">{{$post->content}}</p>
                                    </div>
                                    <div>
                                        @foreach($post->tags as $tag)
                                    <span class="badge-pill">{{$tag->title}}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                                <!-- Related Posts -->


                        </article> <!-- end standard post -->

                        <!-- Comments -->

                    <!-- Comment Form -->
                        <div id="respond" class="comment-respond">
                            <div class="title-wrap">
                                <h5 class="comment-respond__title section-title">دیدگاه شما</h5>
                            </div>

                            <form id="form" class="comment-form" method="post" action="{{route('comments.store')}}">
                                @csrf
                                <input name="post_id"  type="hidden" value="{{$post->id}}">
                                <p class="comment-form-comment">
                                    <label ><h1>نظرتان را بیان نمایید:</h1></label>
                                    <textarea  name="content" rows="5" required="required"></textarea>
                                </p>

                                @if(!auth()->user())

                                    <div class="row row-20">
                                        <div class="col-lg-4">
                                            <label >نام</label>
                                            <input name="author_name"  type="text">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>ایمیل: </label>
                                            <input name="email"  type="email">
                                        </div>
                                        <div class="col-lg-4">
                                            <label >موبایل:</label>
                                            <input name="mobile"  type="text">
                                        </div>
                                    </div>
                                @endif
                                <div class="card-footer">
                                    <button type="submit" class="btn note-btn-fontname">ثبت</button>
                                </div>
                                @include('comment_replies', [ 'comments' => $comments , 'post' => $post])

                            </form>
                        </div> <!-- end comment form -->

                    </div> <!-- end content box -->

                </div> <!-- end post content -->
            </div>
        </div>
    </main>

    @include('layouts.sidebar')
@endsection
@section('page_script')
<script>
    $(document).ready(function () {
        $(".replay-button").click(function (){
            var comment_id=$(this).attr('data-comment-id');
            $("#replaybox-"+ comment_id).css("display","block");
        });
        $(".cancel-button").click(function (e){
            e.preventDefault();
            var comment_id=$(this).attr('data-comment-id');
            $("#replaybox-"+ comment_id).css("display","none");
        });
    });
</script>
@endsection