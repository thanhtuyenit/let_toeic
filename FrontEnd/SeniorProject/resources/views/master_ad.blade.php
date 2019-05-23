<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Walter</title>
    <link rel="shortcut icon" type="image/png" href="{{url('images/icon.png')}}"/>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ url('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ url('admin/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #31b0d5">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('manager')}}">Profile</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
        {{--<li class="dropdown">--}}
        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
        {{--<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>--}}
        {{--</a>--}}
        {{--<ul class="dropdown-menu dropdown-user">--}}
        {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
        {{--</li>--}}
        {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
        {{--</li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="{{route('login')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--<!-- /.dropdown-user -->--}}
        {{--</li>--}}
        <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="image" style="width: 250px;height: 100px;text-align: center; background-color: #a6e1ec"  >
                <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{url('images/user_profile.png')}}" alt="User Image">
                </div>
                <label for="fullname"><b>Full Name</b></label>
            </div>
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        {{--<a href="{{route('manager.admin.list')}}"><i class="fa fa-list fa-fw"></i> List Account</a> --}}
                        <a href=""><i class="fa fa-list fa-fw"></i> List Account</a>

                    </li>


                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('manager.admin.profile')}}">Profile</a>
                            </li>
                            <li>
                                    <a href="{{route('manager.admin.pass')}}">Change Password</a>
                            </li>
                            <li>
                                <a href="{{route('login')}}">Logout</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <!--        <div class="container-fluid">-->
        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <h1 class="page-header">Category-->
        <!--                        <small>Add</small>-->
        <!--                    </h1>-->
        <!--                </div>-->
        <!-- /.col-lg-12 -->
        <!--Day la noi chua noi dung -->

        <div class="col-lg-12">
            @if(Session::has('flash_message'))
                <div class="alert alert-{!!Session::get('flash_level')!!}">{!!Session::get('flash_message')!!}</div>
            @endif
        </div>
    @yield('content')
    <!--Eng day la noi chua noi dung -->
        <!-- /.row -->
        <!--        </div>-->
        <!-- /.container-fluid -->
        <!--    </div>-->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ url('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ url('admin/dist/js/sb-admin-2.js')}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ url('admin/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ url('admin/dist/js/myScript.js')}}"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</div>
</body>

</html>
