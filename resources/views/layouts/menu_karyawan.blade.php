<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="">
            <a href="/siswa/beranda">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li class="header">SETTING</li>
        <li class="">
            <a href="/logout">
                <i class="fa fa-sign-out"></i> <span>Log Out</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>

    </ul>
</section>