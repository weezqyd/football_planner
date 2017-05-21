<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<title>{{config('app.name')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('dist/jquery.fancybox.css')}}" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'> 
<script src="{{asset('js/jquery.js')}}"></script>
<!---- start-smoth-scrolling---->

<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/jquery.fancybox.js')}}"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
                $('.fancybox').fancybox();
			});
</script>
<!---- start-smoth-scrolling---->
<!--start-team-->
<link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}" />
<!--end-team-->
@stack('css')
</head>
<body>
	<div class="head" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
			</div>
			<div class="header">
				<div class="menu">
                    <a class="toggleMenu" href="#"><img src="{{asset('images/menu-icon.png')}}" alt="" /> </a>
					<ul class="nav" id="nav">
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('fixtures')}}">Fixtures</a></li>
						<li><a href="{{route('teams.index')}}">Teams</a></li>
						<li><a href="{{url('groups')}}">Groups</a></li>
						<li><a href="{{url('venues')}}">Venues</a></li>
					</ul>
                    <!----start-top-nav-script---->
		            <script type="text/javascript" src="{{asset('js/responsive-nav.js')}}"></script>
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
		<!----//End-top-nav-script---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <!-- Content -->
    @yield('content')
     <!--End  Content -->
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<h3>SUBSCRIBE TO NEWSLETTER</h3>
				<div class="footer-bottom">
					<div class="col-md-4 footer-bottom-left">
						<img src="{{asset('images/msg.png')}}" alt="">
					</div>
					<div class="col-md-8 footer-bottom-right">
						<small>Enter Your Email here</small>
						<div class="contact-text">
							<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
							<input type="submit" value="SUBMIT" >
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="ftr">
						<p>DESIGN BY <a href="https://github.com/weezqyd"> Leitato Albert</a></p>
					</div>
				</div>
			</div>
		</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-->
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
	@stack('js')
</body>
</html>