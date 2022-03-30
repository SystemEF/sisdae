<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
{{--         <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> --}}
        <!-- search form -->
{{--         <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menú</li>
            <li><a href="{{ url('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Tablero</span></a></li>
            <li class="header">Gestión</li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-users"></i> <span>Gestión de usuarios</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ url('dashboard')}}"><i class="fa fa-user-plus"></i> Agregar usuario</a></li>
                <li><a href="{{ url('dashboard')}}"><i class="fa fa-list-ul"></i> Listar usuarios</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-book"></i> <span>Tesis</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                <li><a href="{{ url('dashboard')}}"><i class="fa fa-plus"></i>Crear temas de tesis</a></li>
                <li><a href="{{ url('dashboard')}}"><i class="fa fa-list"></i>Listar temas de tesis</a></li>
                </ul>
            </li>
        </ul>
    </section>
<!-- /.sidebar -->
</aside>