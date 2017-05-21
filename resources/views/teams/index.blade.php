@extends('layouts.master')
    @section('content')
	<div class="about">
		<div class="container">
			<div class="about-top">
				<h3>TEAMS IN THE TOURNAMENT</h3>
			</div>
			@if(auth()->check())
			<a href="{{route('teams.create')}}" class="btn btn-primary pull-right">ADD A TEAM</a>
			@endif
		</div>
		<div class="team">
		@if(session('error'))
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>{{session()->pull('error')}}!</strong> 
			</div>
		@endif
			<div class="container">
					<ul class="ch-grid">
						@foreach($teams as $team)
						<li>
							<div class="ch-item" style="background: url(/flags/{{strtolower($team->country_code)}}.svg) no-repeat center; background-size:200px 150px;">
								<div class="ch-info">
									<h3>{{$team->country}}</h3>
									<p> {{$team->region}} <a href="#">View Fixtures</a></p>
								</div>
							</div>
							<h3>{{$team->country}}</h3>
						</li>
						@endforeach
					</ul>
			</div>
		</div>
		<!--end-team-->
	</div>
    @endsection