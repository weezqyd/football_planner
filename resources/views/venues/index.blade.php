@extends('layouts.master')
    @section('content')
        <div class="gallery-content">
	 <div class="container">
		<div class="gallery-content-head text-left">
			<h3>Match Venues</h3>
			<p>All mathes will be distributed among the stadiums all over Russia</p>
		</div>
            @foreach($venues as $key => $venue)
                @if($key == 0 OR $key%4 == 0)
                <div class="section group">
                @endif
                @php
                    $img = array_rand($images, 1);
                @endphp
                    <div class="grid_1_of_4 images_1_of_4">
                        <a  class="fancybox" href="images/{{$images[$img]}}" data-fancybox="gallery" title="{{$venue->stadium.', '.$venue->city.', Capacity: '.number_format($venue->capacity)}}">
                        <img height="160" src="images/{{$images[$img]}}" class="img-style row6" alt=""><span> </span></a>
                        <p style="text-align:center;">{{$venue->stadium.', '.$venue->city.', Capacity: '.number_format($venue->capacity)}}</p>
                    </div>
                @if($loop->last || $key%4 == 0)
                </div> 	
                @endif
            @endforeach
   </div>
</div>
    @endsection