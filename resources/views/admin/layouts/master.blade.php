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
                    <li><a href="view-table.html"><i class="fa fa-eye"></i>All Posts</a></li>
                    <li><a href="add-post.html"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
                    <li><a href="{{url('viewcategory')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
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
                    <li><a href="#"><i class="fa fa-eye"></i>All Images</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Add Images</a></li>
                    <li><a href="#"><i class="fa fa-eye"></i>All Videos</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Add Videos</a></li>
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
                    <li><a href="#"><i class="fa fa-eye"></i>All Pages</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Add Pages</a></li>
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
                    <li><a href="#"><i class="fa fa-eye"></i>All Reports</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Add Reports</a></li>
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
                    <li><a href="#"><i class="fa fa-eye"></i>All Users</a></li>
                    <li><a href="#"><i class="fa fa-plus-circle"></i>Add Users</a></li>
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
                    <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li>
                    <li><a href="login.html"><i class="fa fa-power-off"></i>Log Out</a></li>
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