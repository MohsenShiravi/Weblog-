@extends('dashboard.layout.master')
@section('title','ایجاد پست جدید')
@section('content')
    @include('dashboard.sidebar') ;
        <div class="content" dir="rtl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">ویرایش پست </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="{{route('posts.update',['post'=>$post->id])}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان پست</label>
                                        <input type="text" value="{{old('title',$post->title)}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
                                    </div>

                                    <div class="form-group">
                                        <label>خلاصه محتوا</label>
                                        <textarea name="short_content" class="form-control" rows="3" placeholder="خلاصه محتوا را وارد نمایید">{{old('short_content',$post->short_content)}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>محتوا</label>
                                        <textarea name="content" class="form-control" rows="3" placeholder=" محتوا را وارد نمایید">{{old('content',$post->content)}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>نام دسته بندی</label>
                                        <select name="category_id" class="form-control">
                                            <option> انتخاب کنید:</option>

                                            @foreach ($categories as $category){
                                            <option @if($category->id==$post->category_id) selected @endif value="{{$category->id}}"  >{{$category->title}}</option>';
                                           @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="inputError"> وضعیت انتشار</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="draft" @if($post->status=='draft') checked @endif>
                                            <label class="form-check-label">پیش نویس</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="published" @if($post->status=='published') checked @endif>
                                            <label class="form-check-label">منتشر شده</label>
                                        </div>
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

