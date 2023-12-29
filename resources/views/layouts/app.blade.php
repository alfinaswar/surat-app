<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/default/style.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{ asset('') }}assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" />

    <!-- ================== END PAGE LEVEL STYLE ================== -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('') }}assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
</head>
<body>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-light-sidebar">
        <!-- begin #header -->
        <div id="header" class="header navbar-inverse">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            
            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
                <li>
                </li>
                <li class="dropdown navbar-user">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end #header -->
        
        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;" data-toggle="nav-profile">
                            <div class="cover with-shadow"></div>
                            <div class="image">
                                <img src="{{ asset('') }}assets/img/user/user-13.jpg" alt="" />
                            </div>
                            <div class="info">
                                <b class="caret pull-right"></b>
                               KEPOLISIAN REPUBLIK INDONESIA
                                <small>SISTEM PENGAJUAN SURAT</small>
                            </div>
                        </a>
                    </li>
                    
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-th-large"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                           
                        <b class="caret"></b>
                            <i class="fa fa-chart-pie"></i>
                            <span>Pengajuan Surat SKHP</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('pengajuan.index')}}">Ajukan Surat</a></li>
                        
                        </ul>
                    </li>

                @if (auth()->user()->role == "admin")
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-chart-pie"></i>
                            <span>Master Data</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{route('users.index')}}">User Management</a></li>
                            <li><a href="{{route('roles.index')}}">Add Role</a></li>
                        </ul>
                    </li>
                @else
                @endif
                    
                    
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->
        
        <!-- begin #content -->
        <div id="content" class="content">
        
            <!-- end page-header -->
            
            <!-- begin panel -->
 <main class="py-4">
            @yield('content')
        </main>
            <!-- end panel -->
        </div>
        <!-- end #content -->
        
        
        <!-- end theme-panel -->
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('') }}assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}js/app.js"></script>
    <script src="{{ asset('') }}assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('') }}assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('') }}assets/js/theme/default.min.js"></script>
    <script src="{{ asset('') }}assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    	<script src="{{ asset('') }}assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
	<script src="{{ asset('') }}assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
	<script src="{{ asset('') }}assets/js/demo/table-manage-combine.demo.min.js"></script>
    
    <script>
        
        $(document).ready(function() {
            App.init();
            TableManageCombine.init();
        });
    </script>
</body>
</html>
