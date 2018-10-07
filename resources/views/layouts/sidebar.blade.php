
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ (Request::path() == 'admin/beranda') ? 'active' : '' }}">
          <a href="{{url('admin/beranda')}}">
            <i class="fa fa-th"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="{{ (Request::path() == 'admin/about') ? 'active' : '' }}">
          <a href="{{url('admin/about')}}">
            <i class="fa fa-check"></i> <span>About</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        <li class="{{ (Request::path() == 'admin/services') ? 'active' : '' }}">
          <a href="{{url('admin/services')}}">
            <i class="fa fa-book"></i> <span>Manage Service</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="{{ (Request::path() == 'admin/portofolio/edit') ? 'active' : '' }}">
          <a href="{{url('admin/portofolio/edit')}}">
            <i class="fa fa-bookmark"></i> <span>Manage Portofolio</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="{{ (Request::path() == 'admin/testimoni') ? 'active' : '' }}">
          <a href="{{url('admin/testimoni')}}">
            <i class="fa fa-eye"></i> <span>Manage Testimoni</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/alamat') ? 'active' : '' }}">
          <a href="{{url('admin/alamat')}}">
            <i class="fa fa-home"></i> <span>Manage Alamat</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/mail') ? 'active' : '' }}">
          <a href="{{url('admin/mail')}}">
            <i class="fa fa-mail-forward"></i> <span>Pesan yg Masuk</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'admin/artikel') ? 'active' : '' }}">
          <a href="{{url('admin/artikel')}}">
            <i class="fa fa-folder-open-o"></i> <span>Artikel</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{ (Request::path() == 'keluar') ? 'active' : '' }}">
          <a href="{{url('keluar')}}">
            <i class="fa fa-trash"></i> <span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        
        
        <!--<li>-->
        <!--  <a href="{{ url('agenda') }}">-->
        <!--    <i class="fa fa-th"></i> <span>Agenda Bulan Ini</span>-->
        <!--    <span class="pull-right-container">-->
        <!--      <small class="label pull-right bg-green">new</small>-->
        <!--    </span>-->
        <!--  </a>-->
        <!--</li>-->
        
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>