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
                        <form role="form" method="post" action="{{route('users.store',['user'=>$user->id])}}" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان </label>
                                    <input disabled type="text" value="{{old('name',$user->name)}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان </label>
                                        <input disabled type="text" value="{{old('name',$user->email)}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان دسته بندی را وارد کنید">
                                    </div>
                                    <select class="form-control" name="role_id" id="">
                                        <option selected>--انتخاب کنید--</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}" @if(in_array($role->id,$find_role->pluck('id')->toArray())) selected @endif>{{$role->name}}</option>
                                        @endforeach
                                    </select>
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

