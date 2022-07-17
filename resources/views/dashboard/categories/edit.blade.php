@extends('dashboard.layout.master')
@section('title','ویرایش دسته بندی')
@section('content')
    @if ($errors->any())
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">name</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست دسته بندی ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ساخت دسته بندی جدید</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('posts.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>لیست پست ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('posts.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ساخت پست جدید</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/isoblog/dashboard/comments/index.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>نظرات کاربران</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form  action="{{route('categories.update',['category'=>$category->id])}}" method="post" >
        @csrf
        <div class="col-md-6">
            <label  class="form-label">ویرایش دسته بندی</label>
            <input type="text" class="form-control" name="title" value="{{$category->title}}" >
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
@endsection
