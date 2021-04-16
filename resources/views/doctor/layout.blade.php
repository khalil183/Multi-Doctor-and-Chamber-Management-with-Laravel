@include('partials.header')
    <div class="wrapper">

        <header class="main-header">
          <!-- Logo -->
          <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="{{ asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
              </div>
              <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>


            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li><a href="{{ route('doctor.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Setup Enviorenment</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ route('doctor.chamber.index') }}"><i class="fa fa-circle-o"></i>Manage Chamber</a></li>
                  <li><a href="{{ route('doctor.assistant.index') }}"><i class="fa fa-circle-o"></i>Manage Assistant</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Appoinments History</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ route('doctor.appoinment') }}"><i class="fa fa-circle-o"></i>Today</a></li>
                  <li><a href="{{ route('doctor.all.appoinment') }}"><i class="fa fa-circle-o"></i>History</a></li>
                </ul>
              </li>

              <li><a href="{{ route('doctor.logout') }}"><i class="fa fa-book"></i> <span>Doctor Logout</span></a></li>


            </ul>
          </section>
          <!-- /.sidebar -->
        </aside>

        @yield('doctor-content')
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.2.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
      </div><!-- ./wrapper -->
@include('partials.footer')
