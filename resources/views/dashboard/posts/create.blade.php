@extends('dashboard.layout.master')
@section('title','ایجاد پست جدید')
@section('content')
    @include('dashboard.sidebar') ;

    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content" dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ثبت پست جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان پست</label>
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleInputEmail1" placeholder="عنوان پست را وارد کنید">
                                </div>
                                <div class="form-group">
                                    <label>خلاصه محتوا</label>
                                    <textarea name="short_content" value="{{old('short_content')}}" class="form-control" rows="3" placeholder="خلاصه محتوا را وارد نمایید"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>محتوا</label>
                                    <textarea name="content" value="{{old('content')}}" class="form-control" rows="3" placeholder=" محتوا را وارد نمایید"></textarea>
                                </div>
                                <div class="box-widget">
                                    <h5>تصویر شاخص</h5>
                                    <input type="file" name="file">
                                </div>
                                <div class="form-group">
                                    <label>نام دسته بندی </label>
                                    <select name="category_id" class="form-control">
                                        <option>انتخاب کنید:</option>
                                      @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label class="control-label" for="inputError"> تگ های مورد نظر را انتخاب کنید</label>
                                    @foreach($tags as $tag)
                                        <label for="" class="pr-4">
                                            <input type="checkbox" name="tags[]" id="" value="{{$tag->id}}">{{$tag->title}}
                                        </label>
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="inputError"> وضعیت انتشار</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="draft" checked>
                                        <label class="form-check-label">پیش نویس</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="published">
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
@endsection
