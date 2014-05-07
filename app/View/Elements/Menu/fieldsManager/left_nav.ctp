<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat">
                        <i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li  >
                <a href="/">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Khóa học</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo Router::url('/',true);?>courses/add"><i class="fa fa-angle-double-right"></i> Thêm khóa học</a></li>
                    <li><a href="/courses/index/1"><i class="fa fa-angle-double-right"></i> Khóa học đang đăng ký</a></li>
                    <li><a href="/courses/index/2"><i class="fa fa-angle-double-right"></i> Khóa học sắp mở</a></li>
                    <li><a href="/courses/index/3"><i class="fa fa-angle-double-right"></i> Khóa học đã hoàn thành</a></li>
                    <li><a href="/courses/index/4"><i class="fa fa-angle-double-right"></i> Khóa học đã hủy</a></li>

                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Chuyên đề</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/chapters/add"><i class="fa fa-angle-double-right"></i> Thêm mới</a></li>
                    <li><a href="/chapters/index"><i class="fa fa-angle-double-right"></i> Danh sách chuyên đề</a></li>
                    
                </ul>
            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user-md"></i>
                    <span>Tập huấn viên</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/users/add_teacher"><i class="fa fa-angle-double-right"></i> Thêm mới</a></li>
                    <li><a href="/users/index_teacher"><i class="fa fa-angle-double-right"></i> Danh sách tập huấn viên</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sign-in"></i> <span>Thống kê</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Theo đơn vị</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> Theo chuyên đề</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Tập huấn viên</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Khoảng thời gian</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sign-in"></i> <span>Chứng nhận</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Quản lý sổ chứng nhận</a></li>
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> In theo học viên</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> In theo lớp</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>