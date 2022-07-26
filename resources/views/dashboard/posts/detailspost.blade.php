@extends('dashboard.layout.master')

@section('content')
    @include('dashboard.sidebar') ;
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">profile</h1>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Bordered Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1>جزئیات پست</h1>
                                        <p><strong>title:</strong><br>
                                            {{$post->title}}
                                        </p>

                                        <p><strong>content:</strong><br>
                                            {{$post->content}}
                                        </p>



                                    </div>
                                    <div>
                                        <form action="{{route('posts.confirm',['post'=>$post->id])}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label" for="inputError">اجازه اپلود</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="is_confirm" value="1" >
                                                    <label class="form-check-label">تایید</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="is_confirm" value="0">
                                                    <label class="form-check-label">رد</label>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">ثبت</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

@endsection







