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
       @include('dashboard.layout.sidebar')

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
                @if(Auth::user()->hasRole('superadministrator') or Auth::user()->hasRole('administrator'))
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>اختصاص نقش به کاربر</p>
                    </a>
                </li>

                @endif
                <li class="nav-item">
                    <a href="{{route('comments.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>نظرات کاربران</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tags.show')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>تگ های پست</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('profile.show')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>پروفایل</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
