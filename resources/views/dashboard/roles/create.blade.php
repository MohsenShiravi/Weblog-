@extends('dashboard.layout.master')
@section('title','ایجاد نقش جدید')
@section('content')
    @include('dashboard.sidebar') ;

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if ($errors->any())

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    </div>
                    @endif
    <form  action="{{route('roles.store')}}" method="post" class="row g-3 mt-8">
        @csrf
        <div class="col-md-6">
            <label  class="form-label">نام نقش</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" >
        </div>
        <div class="form-row">
            @foreach($permissions as $permission)
                <label for="" class="pr-4">
                    <input type="checkbox" name="permissions[]" id="" value="{{$permission->id}}">{{$permission->name}}
                </label>
            @endforeach
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
