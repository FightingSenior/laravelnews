<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | @yield('title')</title>
    <link rel="stylesheet" href="{{url('adminstyle/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('adminstyle/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('adminstyle/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{url('adminstyle/css/menu.css')}}">
    <link rel="stylesheet" href="{{url('adminstyle/css/style.css')}}">
</head>

<body>

    <!-- #region Header -->

    <div class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="index.html" class="dashboard"><i class="fa fa-tachometer"></i> <span>Bảng điều khiển</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bookmark-o"></i> <span>Bài đăng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="view-table.html"><i class="fa fa-eye"></i>Tất cả bài viết</a></li>
                    <li><a href="add-post.html"><i class="fa fa-plus-circle"></i>Thêm bài đăng</a></li>
                    <li><a href="{{url('viewcategory')}}"><i class="fa fa-plus-circle"></i>Thể loại</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i> <span>Bộ sưu tập</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-eye"></i>Tất cả hình ảnh</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Thêm hình ảnh</a></li>
                    <li><a href="#"><i class="fa fa-eye"></i>Tất cả video</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Thêm video</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Trang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-eye"></i>Tất cả các trang</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Thêm trang</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="menu.html">
                    <i class="fa fa-file"></i> <span>Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Báo cáo</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-eye"></i>Tất cả báo cáo</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Thêm báo cáo</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Người dùng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-eye"></i>Tất cả người dùng</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Thêm người dùng</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-address-book"></i> <span>Người dùng đang hoạt động</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-edit"></i>Chỉnh sửa hồ sơ</a></li>
                    <li><a href="login.html"><i class="fa fa-power-off"></i>Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- #endregion -->

    <div class="container-fluid">
        @yield('content')
    </div>
    <!-- #region Footer -->

    <footer>
        <div class="col-sm-6">Copyright &copy; 2022</div>
        <div class="col-sm-6">
            <span class="pull-right">Version 2.2.3</span>
        </div>
    </footer>

    <!-- #endregion -->

    <script type="text/javascript" src="{{url('adminstyle/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('adminstyle/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('adminstyle/js/app.min.js')}}"></script>
    <script type="text/javascript" src="{{url('adminstyle/js/script.js')}}"></script>

    @yield('ckeditor_script')

</body>

</html>