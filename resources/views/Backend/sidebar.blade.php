<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{url('/')}}/Backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin::dashboard')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('admin::allSlider')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Slider
                    </p>
                </a>
            </li>


            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/forms/general.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>General Elements</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/forms/advanced.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Advanced Elements</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
