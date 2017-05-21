@extends('layouts.master')
    @section('content')
        	<div class="banner"> 
	    <div class="banner-text">
	    	<div class="container">
				<h1>SEARCHING ABOUT SOCCER..??</h1>
				<p>HERE WE GOT SAME NEWS HERE</p>
				<div class="search">
					<input type="text" value="Search here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search here...';}">
					<input type="submit" value="Find">
			 	</div>
			 </div>
		</div>
	</div>
	<!--start-website-->
	<!--Responsive-tabs-Starts-Here-->
	</div>
	<div class="website">
		<div class="container">
			<div class="website-top">
				<h3>Upcoming Fixtures</h3>
			</div>
		</div>
	</div> 
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
					<!-- Partners Starts Here --->
		<!--Responsive-tabs-ends-Here-->
	<!--end-website-->
    @endsection