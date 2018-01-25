@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <table class="table table-striped">
                        <thead>

                            <tr>
                                <th>User</th>
                                <th>E-mail</th>
                                <th>Created_at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{$i+=1}}</th>
                                    <td>{!!$user->name !!}</td>
                                    <td>{!! $user->email !!}</td>
                                    <td>{!! $user->created_at !!}</a></td>
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