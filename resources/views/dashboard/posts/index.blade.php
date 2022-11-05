@extends('dashboard.layout.master')
@section('title','پست ها')
@section('content')

    @include('dashboard.sidebar') ;
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">پست ها</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/index">Home</a></li>
                            
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

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام </th>
                                        <th>محتوای کوتاه </th>
                                        <th>محتوا </th>
                                        <th>دسته بندی</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ</th>
                                        <th>نام نویسنده</th>
                                        <th>تصویر پست</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                         @php
                                             $date = \Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($post->done_at));
                                             $done_at=\Morilog\Jalali\CalendarUtils::convertNumbers($date);
                                         @endphp
                           <tr class="@if($post->is_confirm==0) bg-danger @else bg-success @endif">
                               <td>{{ $loop->iteration}}</td>
                               <td>{{$post->title}}</td>
                               <td>{{$post->short_content}}</td>
                               <td>{{$post->content}}</td>
                               <td>{{$post->category->title}}</td>
                               <td>{{$post->status}}</td>
                               <td>{{$done_at}}</td>
                               <td>{{$post->user->name}}</td>
                               <td><img width="50px" height="40px" src="{{$post->image->file}}"></td>
                               <td><a href="{{route('posts.edit',['post'=> $post->id])}}" class="btn btn-sm btn-primary">ویرایش</a>
                               @if(Auth::user()->hasRole('admin'))
                                   <td><a href="{{route('posts.DetailsPost',['post'=> $post->id])}}" class="btn btn-sm btn-primary">اجازه</a>
                                       @endif
                                       <a href="{{route('posts.destroy',['post'=> $post->id])}}" onclick="return confirm('آیا مطمئن هستید؟')" class="btn btn-sm btn-danger">حذف</a>
                                   </td>
                                        </tr>
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

