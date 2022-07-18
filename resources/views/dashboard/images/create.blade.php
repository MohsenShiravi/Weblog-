@extends('dashboard.layout.master')
@section('title','ثبت عکس')
@section('content')
    @include('dashboard.sidebar') ;
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ثبت عکس</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">ثبت عکس برای پست و کاربر</h3>
                            </div>
                            <!-- /.card-header -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                        @endif
                            <!-- form start -->
                            <form role="form" method="post" action="{{route('images.store')}}" enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label  class="form-label">اپلود عکس</label>
                                        <input type="file" class="form-control" name="file"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>انتخاب برای ثبت </label>
                                    <select name="imageable_type" class="form-control">
                                        <option>انتخاب کنید:</option>
                                        <option value="App\Models\User">کاربر</option>
                                        <option value="App\Models\Post">پست</option>
                                    </select>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label  class="form-label">id</label>
                                        <input type="number" class="form-control" name="imageable_id" value="imageable_id" >
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
