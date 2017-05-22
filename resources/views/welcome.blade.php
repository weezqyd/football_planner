@extends('layouts.master')
    @section('content')
        	<div class="banner"> 
	    <div class="banner-text">
	    	<div class="container">
				<h1>WORLD CUP 2018 RUSSIA</h1>
				<p>THE FIFA WORLD CUP LIVE NEWSFEED</p>
				
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
			<div class="row">
			<table class="table">
				<tbody>
					@foreach(App\Entities\Match::where('kick_off', '>=', Carbon\Carbon::now())->take(6)->get() as $match)
					<tr>
						<td>{{$match->kick_off->format('l d F Y H:i')}}</td>
						<td scope="row">{{$match->hometeam->country.' VS '.$match->awayteam->country}}</td>
						<td>{{$match->venue->stadium.', '.$match->venue->city}}</td>
						<td>{{$match->hometeam->group->first()->title}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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