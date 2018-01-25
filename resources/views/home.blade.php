@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                                <td><a href="/movie/{{$movie->id}}" class="btn btn-success">Buy e-tickets</a></td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>
@endsection
