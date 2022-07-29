@extends('dashboard.layout.master')
@section('title','ایجاد دسته بندی')
@section('content')
    @include('dashboard.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">نظرات</h1>
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
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">ردیف</th>
                                    <th>عنوان پست</th>
                                    <th>نویسنده</th>
                                    <th>محتوای کامنت</th>
                                    <th>وضعیت انتشار</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{$comment->title}}</td>
                                    <td>@if(isset($comment->author_name)){{$comment->author_name}}@else{{$comment->name}} @endif</td>
                                    <td>{{$comment->content}}</td>
                                    <td>@if($comment->is_confirm == 1)منتشر شده@else($comment->is_confirm == 0)منتشر نشده@endif</td>
                                    <td><a href="{{route('comments.edit',['comment'=> $comment->id])}}" class="btn btn-sm btn-primary">اجازه انتشار</a>

                                        <a href="{{route('comments.destroy',['comment'=> $comment->id])}}" onclick="return confirm('آیا مطمئن هستید؟')" class="btn btn-sm btn-danger">حذف</a></td>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection