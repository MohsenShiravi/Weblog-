<!-- Comments -->
<div class="display-comment">

    @foreach($comments as $comment)

            <div class="comment-body">

                <div class="comment-text">

                    @if(isset($comment->author_name))<h6 class="comment-author">{{$comment->author_name}}(مهمان)@else{{$comment->user->name}} @endif</h6>

                    <p>{{$comment->content}}</p>
                    <button href="#" class="comment-reply replay-button" id="replay" data-comment-id="{{$comment->id}}">پاسخ</button>
                </div>
            </div>

    </div>

</hr>


<!-- end comments -->

<!-- Comment Form -->
 <div id="replaybox-{{$comment->id}}"  class="comment-respond replay-box" style="display: none">
     <form id="form"  class="comment-form" method="post" action="{{route('comments.replay')}}">
        @csrf
        <input name="post_id"  type="hidden" value="{{$post->id}}">
        <input name="parent_id"  type="hidden" value="{{$comment->id}}">

        <p class="comment-form-comment">
            <label >دیدگاه</label>
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
            <button type="submit" class="btn btn-primary ">پاسخ</button>
            <button type="submit" class="cancel-button" data-comment-id="{{$comment->id}}">لغو</button>

        </div>

    </form>
    @include('comment_replies', ['comments' => $comment->children])
 </div>

<!-- end comment form -->
@endforeach
