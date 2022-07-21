@extends('dashboard.layout.master')
@section('title','اجازه انتشار نظر')
@section('content')
    @include('dashboard.sidebar') ;
    <div class="content" dir="rtl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">محتوای نظر </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <p>{{$comment->content}}</p>
                            <form role="form" method="post" action="{{route('comments.update',['comment'=>$comment->id])}}" >
                                @csrf
                                <div class="form-group">
                                    <label class="control-label" for="inputError"> وضعیت انتشار</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_confirm" value="1" @if($comment->is_confirm==1)checked @endif>
                                        <label class="form-check-label">منتشر شده</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_confirm" value="0" @if($comment->is_confirm==0) checked @endif>
                                        <label class="form-check-label">منتشر نشده</label>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection
