@extends('layouts.master')
    @section('content')

    <div class="about">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Add A Team</span>
                </div>
                <div class="panel-body">
                    <form action="{{route('teams.store')}}" method="POST" class="form-horizontal" role="form">
                       {{csrf_field()}}
                        <div class="form-group {{$errors->has('country') ? 'has-error' : ''}}">
                            <label class="col-sm-4 control-label" for="team"> Country Name</label>
                            <div class="col-sm-8"> 
                                <select name="country" class="select-input" required="required">
                                    @foreach($countries as $country)
                                    <option @if(old('country') == $country->cca2) selected @endif value="{{$country->cca2}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('country', '<span class="helpblock">:message</span>') !!}
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
    </div>
    @endsection
    @push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('dist/select2/select2.min.css')}}">
    @endpush
    @push('js')
    <script src="{{asset('dist/select2/select2.full.min.js')}}"></script>
    <script>
        $('.select-input').select2({width:'100%'})    
    </script>
    @endpush