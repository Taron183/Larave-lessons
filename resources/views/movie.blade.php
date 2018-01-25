@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/admin/users/create" style="margin-bottom: 10px" class="btn btn-info">Add Movie</a>
                <div class="panel panel-default">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Movie name</th>
                            <th>Movie time</th>
                            <th>Buy e-tickets</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=0
                        @endphp
                        @foreach ($movies as $movie)
                            <tr>
                                <th scope="row">{{$i+=1}}</th>
                                <td>{!!$movie->movie_name !!}</td>
                                <td>{!! $movie->movie_time !!}</td>
                                <td><a href="/movie/{{$movie->id}}" class="btn btn-success">Edit</a></td>
                                <td><a href="/movie/{{$movie->id}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
    <div class="nav-menu">
        <ul id="nav-bar">
            <a href="/admin/users">
                <li class="level-one selected"><i class="fa fa-home"></i>
                    <ul class="level-two">
                        <li>Home<li/>
                    </ul>
                </li>
            </a>

            <a href="/admin/shows">
                <li class="level-one"><i class="fa fa-desktop"></i>
                    <ul class="level-two">
                        <li>Movie<li/>
                    </ul>
                </li>

            </a>

        </ul>
    </div>
@endsection