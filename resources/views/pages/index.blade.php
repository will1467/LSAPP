@extends('layouts.app')

@section('content')
     <div class="jumbotron">
        <div class="container">
            <h1>{{$title}}</h1>
            <p> This is an application for blog posts<p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a>
               <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a>
            </p>
         </div>
     </div>
@endsection