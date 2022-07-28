<!-- Sidebar -->
<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Popular Posts -->
    <aside class="widget widget-popular-posts">
        <h4 class="widget-title">جدید ترین مقالات</h4>
        <ul class="post-list-small">

            @foreach($latestposts as $post)

                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-100">
                                <a href="{{route('show',['post'=> $post->id])}}">
                                    <img data-src="{{$post->image->file}}" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="{{route('show',['post'=> $post->id])}}">{{$post->title}}</a>
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