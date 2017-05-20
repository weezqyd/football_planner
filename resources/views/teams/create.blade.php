@extends('layouts.app')
    @section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Add A Team</span>
                </div>
                <div class="panel-body">
                    <form action="{{route('teams.store')}}" method="POST" class="form-horizontal" role="form">
                       {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="team"> Country Name</label>
                            <div class="col-sm-8"> 
                                <select name="country" class="form-control" required="required">
                                    @foreach($countries as $country)
                                    <option value="{{$country->cca2}}">{{$country->name->common}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-4 control-label" for="team"> Qualification Position</label>
                            <div class="col-sm-8"> 
                                <select name="qualify_position" class="form-control" required="required">
                                    <option value="1">First</option>
                                    <option value="2">Runners Up</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection