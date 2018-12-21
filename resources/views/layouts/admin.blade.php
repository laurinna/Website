<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	
	<!--loading bootstrap components-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!--font awesome for glyphicons-->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' <!-- Load an icon library to show a
	 hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'Laravel') }}</title>

	<!--styles-->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
           
    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
	
	<!--styles-->
	<style>
		.sidenav {
			height: 100%;
			width: 150px;
			position: fixed;
			z-index: 1;
			top: 6;
			bottom:20;
			left: 0;
			background-color: #dfc12a;
			overflow-x: hidden;
			padding-top: 20px;
		}

		.sidenav a {
			padding: 6px 8px 6px 16px;
			text-decoration: none;
			font-size: 12px;
			color: white;
			display: block;
		}

		.sidenav a:hover {
			color: black;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 12px;}
		}
		</style>
</head><!--/head-->
<body>
    <header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container-fluid">
				<div class="row" style="background:#dfc12a; padding:20px 20px">
					<div class="col-sm-3">
						<a class="navbar-brand" style="color:white" href="{{ url('/admin/dashboard') }}">
							{{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                             <span class="navbar-toggler-icon"></span>
                        </button>
					</div>
					<div class="col-sm-9">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav ml-auto">                            
								<li class="dropdown">
									<a style="background:#dfc12a">
										name <i class="fa fa-angle-down"></i>
									</a>                                    
                                        <ul role="menu" class="sub-menu">                                                                        
                                            <li>
                                                <a href="{{ route('logout') }}" 
											        onclick="event.preventDefault();
								                            document.getElementById('logout-form').submit();">
											    Logout
										        </a>
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
													</form>
                                            </li> 
                                        </ul> 
                                </li>                                               
                            </ul> 
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->

    <main class="py-4">
            @yield('content')
    </main>

{!! Toastr::render() !!}
  
<!--scripts-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.scrollUp.min.js"></script>
<script src="/js/price-range.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
