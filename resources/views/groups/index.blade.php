@extends('layouts.master')
    @section('content')
        <div class="gallery-content">
            <div class="container">
                <div class="gallery-content-head text-left">
                    <div class="row">
                        @foreach($groups as $group)
                        <div class="col-sm-6">
                            <center>{{$group->title}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Team</th>
                                        <th>P</th>
                                        <th>W</th>
                                        <th>D</th>
                                        <th>L</th>
                                        <th>Pts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($group->teams as $key => $team)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$team->country}}</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>     
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection