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
                        <form role="form" method="post"  action="{{route('profile.update',['user'=>$user->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">نام</label>
                                    <input type="text" value="{{old('title',$user->name)}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ایمیل</label>
                                    <input type="email" value="{{old('email',$user->email)}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ویرایش تصویر</label>
                                    <input type="file" name="file" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
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

