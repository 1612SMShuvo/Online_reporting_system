<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>EUROSIA | Project Management</title>
	

	<link rel="stylesheet" href="{{  asset('assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/css/font-icons/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="{{  asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/css/neon-core.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/css/neon-theme.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/css/neon-forms.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/css/custom.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/css/skins/purple.css')}}">

	<script src="{{ asset('assets/js/jquery-1.11.0.min.js')}}"></script>

	<!--[if lt IE 9]><script src="{{ asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
	<![endif]-->
	
	
</head>
<body class="page-body skin-purple" >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.html">
					<img src="assets/images/logo.png" width="120" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
		
	<div class="sidebar-user-info">
			
			<div class="sui-normal">
				<a href="#" class="user-link">
					<img src="assets/images/thumb-1.png" alt="" class="img-circle" />
					
					<span>Welcome,</span>
					<strong>Eurosia</strong>
				</a>
			</div>
			
			<div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->				
				<a href="#">
					<i class="entypo-pencil"></i>
					New Page
				</a>
				
				<a href="mailbox.html">
					<i class="entypo-mail"></i>
					Inbox
				</a>
				
				<a href="extra-lockscreen.html">
					<i class="entypo-lock"></i>
					Log Off
				</a>
				
				<span class="close-sui-popup">&times;</span><!-- this is mandatory -->			</div>
		    </div>
					
				
		
				
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li class="opened active">
				<a href="{{route('dashboard')}}">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="layout-api.html">
					<i class="entypo-layout"></i>
					<span>Proposal</span>
				</a>
				<ul>
					<li>
						<a href="{{route('proposal-create-page')}}">
							<span>Proposal Create</span>
						</a>
					</li>
					<li>
						<a href="{{route('proposal-list-page')}}">
							<span>Proposal List</span>
						</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="" target="_blank">
					<i class="entypo-monitor"></i>
					<span>Invoice</span>
				</a>
				<ul>
					<li>
						<a href="{{route('service-create-page')}}">
							<span>Service Create</span>
						</a>
					</li>
					<li>
						<a href="{{route('service-list-page')}}">
							<span>Service List</span>
						</a>
					</li>
					<li>
						<a href="{{route('invoice-create-page')}}">
							<span>Invoice create</span>
						</a>
					</li>
					<li>
						<a href="{{route('invoice-list-page')}}">
							<span>Invoice List</span>
						</a>
					</li>
					
					
					
					
				</ul>
			</li>
			<li>
				<a href="">
					<i class="entypo-newspaper"></i>
					<span>Aggrement</span>
				</a>
				<ul>
					<li>
						<a href="{{route('agreemts_invoice')}}">
							<span>Aggrement invoice</span>
						</a>
					</li>
					<li>
						<a href="{{ route('agreements_create_page') }}">
							<span>Aggrement Create</span>
						</a>
					</li>
					<li>
						<a href="{{ route('agreements_list_page') }}">
							<span>Aggrement List</span>
						</a>
					</li>
					
				</ul>
			</li>
			<li>
				<a href="">
					<i class="entypo-doc-text"></i>
					<span>Inspection</span>
				</a>
				<ul>
					<li>
						<a href="{{route('inspectionteam-list')}}">
							<span>Inspection Team</span>
						</a>
					</li>
					<li>
						<a href="{{route('inspectionteam-create')}}">
							<span>Inspection Team Create</span>
						</a>
					</li>
					<li>
						<a href="{{route('inspection-create')}}">
							<span>Inspection Create</span>
						</a>
					</li>
					<li>
						<a href="{{route('inspection-list')}}">
							<span>Inspection List</span>
						</a>
					</li>
				</ul>
			</li>
			{{-- <li>
				<a href="{{route('review')}}">
					<i class="entypo-chart-bar"></i>
					<span>Review</span>
				</a>
			</li> --}}
			<li>
				<a href="#">
					<i class="entypo-chart-bar"></i>
					<span>Report</span>
				</a>
				<ul>
					<li>
						<a href="{{route('report_create_page')}}">
							<span>Add Report</span>
						</a>
					</li>
					<li>
						<a href="{{route('report_list_page')}}">
							<span>Report List</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="tables-main.html">
					<i class="entypo-window"></i>
					<span>Client Setup</span>
				</a>
				<ul>
					<li>
						<a href="{{route('client-create-page')}}">
							<span>Add Registration</span>
						</a>
					</li>
					<li>
						<a href="{{route('client-list-page')}}">
							<span>Registration List</span>
						</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="">
					<i class="entypo-flow-tree"></i>
					<span>Company Setup</span>
				</a>
				<ul>
					<li>
						<a href="{{route('companyinfo-create-page')}}">
							<i class="entypo-flow-line"></i>
							<span>Company Create</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>		
	</div>	
<div class="main-content">
    @include('layouts.main.head')
      @yield('content')
    @include('layouts.main.footer')
	
</div>
	


	<link rel="stylesheet" href="{{  asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{  asset('assets/js/rickshaw/rickshaw.min.css')}}">

	<!-- Bottom Scripts -->
	<script src="{{ asset('assets/js/gsap/main-gsap.js')}}"></script>
	<script src="{{ asset('assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
	<script src="{{ asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{ asset('assets/js/joinable.js')}}"></script>
	<script src="{{ asset('assets/js/resizeable.js')}}"></script>
	<script src="{{ asset('assets/js/neon-api.js')}}"></script>
	<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{ asset('assets/js/rickshaw/vendor/d3.v3.js')}}"></script>
	<script src="{{ asset('assets/js/rickshaw/rickshaw.min.js')}}"></script>
	<script src="{{ asset('assets/js/raphael-min.js')}}"></script>
	<script src="{{ asset('assets/js/morris.min.js')}}"></script>
	<script src="{{ asset('assets/js/toastr.js')}}"></script>
	<script src="{{ asset('assets/js/neon-chat.js')}}"></script>
	<script src="{{ asset('assets/js/neon-custom.js')}}"></script>
	<script src="{{ asset('assets/js/neon-demo.js')}}"></script>

</body>
</html>