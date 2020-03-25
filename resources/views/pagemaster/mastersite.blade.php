<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{asset('assets/style.css')}}" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/ico/favicon.ico')}}">
  </head>
<body style="background:url(assets/img/white_leather.png) repeat 0 0;">
<!--
	Upper Header Section
-->
<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href=""><span class="icon-twitter"></span></a>
					<a href=""><span class="icon-facebook"></span></a>
					<a href=""><span class="icon-youtube"></span></a>
					<a href=""><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.html"> <span class="icon-home"></span> accueil</a>
				<a href=""><span class="icon-user"></span> My Account</a>
				<a href=""><span class="icon-edit"></span> Free Register </a>
				<a href=""><span class="icon-envelope"></span> Contact us</a>
				<a href=""><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>

<!--
Lower Header Section
-->
<div class="container">
<div id="gototop"> </div>

<div class="row">
	<div class="span4" >
	<h1>
	<a class="logo" href="index.html"><span></span>
		<img src="{{asset('assets/img/logo-bootstrap-shoping-cart.png')}}" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="">
	<h1 class="">
	<i class=""></i>

	</h1>
	</div>
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Telephone :  212+6 45 23 12 23 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="index.html">accueil	</a></li>

			  <li class=""><a href="{{url('commande')}}">Show type</a></li>
			  <li class=""><a href="general.html">General Content</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!--
Body Section
-->

    @yield('maste')



<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
    <script src="{{asset('assets/js/shop.js')}}"></script>
  </body>
</html>
