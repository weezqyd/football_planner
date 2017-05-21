@extends('layouts.master')
    @section('content')
         <div class="about">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span>Add A Match Venue</span>
                        </div>
                        <div class="panel-body">
                            @if(session('success'))
                            
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>{{session()->pull('success')}}</strong>
                            </div>
                            
                            @endif
                            <form action="{{route('venues.store')}}" method="POST" role="form">
                                {{csrf_field()}}
                                <div class="form-group {{$errors->has('stadium') ? 'has-error' : ''}}">
                                    <label for="">Stadium Name</label>
                                    <input type="text" class="form-control" name="stadium" placeholder="Name of stadiim">
                                    {!! $errors->first('stadium', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{$errors->has('city') ? 'has-error' : ''}}">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Location of stadium">
                                    {!! $errors->first('city', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{$errors->has('capacity') ? 'has-error' : ''}}">
                                    <label for="">Stadium capacity</label>
                                    <input type="text" class="form-control" name="capacity" placeholder="Stadium capacity">
                                    {!! $errors->first('capacity', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">ADD VENUE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection