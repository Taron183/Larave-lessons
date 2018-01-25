@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Add Movie</h2>




        <form action="/admin/users" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="usr">Movie name:</label>
                <input type="text" class="form-control" name="movie_name" id="usr" value="">
            </div>
            <div class="form-group">
                <label for="pwd">Movie time:</label>
                <input type="text" class="form-control" id="pwd" name="movie_time"  value="">
            </div>
            <div class="form-group" style="text-align: right;">
                <button type="submit" class="btn btn-success" >Add Movie</button>
            </div>
        </form>




    </div>
@endsection