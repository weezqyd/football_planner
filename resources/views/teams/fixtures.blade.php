@extends('layouts.master')
    @section('content')
	<div class="about">
		<div class="container">
			<div class="about-top">
				<h3>MATCH FIXTURES</h3>
			</div> <div class="row">
                <a href="{{route('fixtures.create')}}" class="btn btn-primary pull-right">GENERATE FIXTURES</a>
            </div>
            </br>
            <div class="row">
                <table class="table">
                    <tbody>
                        @foreach(App\Entities\Match::all() as $match)
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
    @endsection