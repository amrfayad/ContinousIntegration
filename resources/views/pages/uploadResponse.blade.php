@extends('layouts.default')
@section('title', 'Amr Fayad Continuous Integration')
@section('content')
       <div>
            <h3>PULLING CHANGES FROM LOCAL SERVER </h3>
            <p>{{$checkout}}</p>
            <p>{{$pull}}</p>
            @foreach($ignores as $ign)
                <p>{{$ign}}</p>
            @endforeach
            <h3>PUSHING CHANGES TO Cloud Repo</h3>
            <p>{{$push}}</p>
      </div>
@stop
