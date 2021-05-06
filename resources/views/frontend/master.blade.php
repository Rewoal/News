<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>NEWSMAG - NEWS SITE</title>
	<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{ asset('css/style.css')}}" rel="stylesheet" />
	<script src="{{ asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	<div class="col-md-12 top" id="top">
		
		

		<div class="col-md-12 brand">
			<div class="col-md-4 name">
				<font color="#555555">NEWS</font>
				<font color="#2ca0c9">MAG</font>
			</div>
			<div class="col-md-8">
				<img style="float:right" src="{{asset('images/ad1.jpg')}}" width="50%" />
			</div>
		</div>

		<div class="col-md-12 main-menu">
			<div class="col-md-10 menu">
				<nav class="navbar">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<span class="navbar-brand">
							<font color="#555555">NEWS</font>
							<font color="#2ca0c9">MAG</font>
						</span>
					</div>
					<div class="collapse navbar-collapse" id="mynavbar">
						<ul class="nav nav-justified">
							<li><a href="{{url('/')}}" class="active"><span class="glyphicon glyphicon-home"></span></a></li>
							@foreach($categories as $cat)
							<li><a href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
							@endforeach
						</ul>
					</div>
				</nav>
			</div>
			<div class="col-md-2 ">
				<div class="search">
					<input type="search" class="form-control" />
					<span class="glyphicon glyphicon-search search-btn"></span>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 px-md-5" style="background-color:orange; max-width: 20rem;">
					<img class="card-title" style="float:left" src="{{asset('images/virus1.png')}}" />
					<div class="card-body">
						<p class="text-primary"> ИЛЭРСЭН</p>
						<h4 class="card-text">(+1,264) <a> 30,483</a></h4>
					</div>
				</div>
				<div class="col-sm-6 px-md-5" style="background-color:yellow;max-width: 20rem;">
					<img class="card-title" style="float:left" src="{{asset('images/virus2.png')}}" />
					<div class="card-body">
						<p class="text-primary">  ЭДГЭРСЭН</p>
						<h4 class="card-text">(+658) <a> 15,403</a></h4>
					</div>
				</div>
				<div class="col-sm-6" style="background-color:red;max-width: 20rem;">
					<img class="card-title" style="float:left" src="{{asset('images/virus3.png')}}" />
					<div class="card-body">
						<p class="text-primary">  НАС БАРСАН</p>
						<h4 class="card-text">(+4) <a> 78</a></h4>
					</div>
				</div>
				<div class="col-sm-6" style="background-color:green;max-width: 22rem;">
					<img class="card-title" style="float:left" src="{{asset('images/virus4.png')}}" />
					<div class="card-body">
						<p class="text-primary"> 	ВАКЦИНЖУУЛСАН</p>
						<h4 class="card-text">(+69,382) <a> 838,569</a></h4>
					</div>
				</div>
			</div>
		</div>
		<!-- header -->

		@yield('content')

		<!-- footer -->

		<div class="col-md-12 bottom">
			<div class="col-md-4">
				<h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Бидний тухай</span></h3>
				<img src="{{asset('images/book.png')}}" align="left" /><span class="name">
					<font color="#e03521">NEWS</font>
					<font color="#fff">MAG</font>
				</span>
				<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4">
				<div class="col-md-12">
					<h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Линкүүд</span></h3>
				</div>
				<div class="col-md-6">
					<div class="row">
						<ul class="nav">
							@foreach($categories as $key=>$cat)
							@if($key < 4) <li><a href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
								@endif
								@endforeach
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<ul class="nav">
							@foreach($categories as $key=>$cat)
							@if($key > 3)
							<li><a href="{{url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a></li>
							@endif
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<h3 style="border-bottom:2px solid #ccc;"><span style="border-bottom:2px solid #f00;">Холбоо барих</span></h3>
				<span class="name">
					<font color="#e03521">NEWS</font>
					<font color="#fff">MAG</font>
				</span><br />
				Биднийг дагаарай :<br /><br />
				<a href="#"><img src="{{asset('images/icon-fb.png')}}" /></a>
				<a href="#"><img src="{{asset('images/icon-twitter.png')}}" /></a>
				<a href="#"><img src="{{asset('images/icon-google.png')}}" /></a>
				<a href="#"><img src="{{asset('images/icon-insta.png')}}" /></a>
				<a href="#"><img src="{{asset('images/icon-pin.png')}}" /></a>
				<a href="#"><img src="{{asset('images/icon-youtube.png')}}" /></a><br />
				<a href="#top" class="goto">
					<span class="glyphicon glyphicon-chevron-up"></span></a>
			</div>

			<div class="col-md-12 text-center copyright">
				Copyright &copy; {{date('Y')}} <a href="#">NEWSMAG</a> Powered by: <a href="#">CS19D902 B.Temuulen</a>
			</div>


</body>

</html>