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
                                        <h1>profile</h1>
                                        <p><strong>name:</strong><br>
                                        {{$user->name}}
                                        </p>

                                    <p><strong>email:</strong><br>
                                        {{$user->email}}
                                    </p>

                                <p><strong>role:</strong><br>
                                    @foreach($user->roles as $role)
                                        {{$role->title}}
                                    @endforeach
                                </p>
                            </div>
                                    <p><a href="/profile/edit" class="px-2 btn-color">edit profile</a></p>

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







