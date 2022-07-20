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
                <a href="#" class="d-block">.</a>
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
                    <a href="{{route('images.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>اختصاص عکس</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('images.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>نمایش عکس</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('roles.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ایجاد نقش</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>لیست نقش ها</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>اختصاص نقش به کاربر</p>
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
