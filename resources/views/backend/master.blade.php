<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('backend/css/font-awesome.min.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{url('backend/css/ionicons.min.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{url('backend/css/menu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('backend/css/style.css')}}" >	
  <script type="text/javascript" src="{{asset('backend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend/js/app.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend/js/script.js')}}"></script>
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="index.html" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Posts</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-posts')}}"><i class="fa fa-eye"></i>All Posts</a></li>
              <li><a href="{{url('add-post')}}"><i class="fa fa-plus-circle"></i>Add Posts</a></li>
              <li><a href="{{asset('viewcategory')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Gallery</span>
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
              <i class="fa fa-file"></i> <span>Pages</span>
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
              <i class="fa fa-bar-chart"></i> <span>Reports</span>
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
            <a href="{{url('settings')}}">
              <i class="fa fa-gear"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>Active User</span>
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

@yield('content')

<footer>
	<div class="col-sm-6">
		Copyright &copy; 2021 </a> CS19D902 B.Temuulen 
	</div>
	<div class="col-sm-6">
		<span class="pull-right">Version 1.0.0</span>
	</div>
</footer>


</body>
</html>