@extends('layouts.default')
@section('title', 'Amr Fayad Continuous Integration')
@section('content')
       <div>
            @foreach($response as $res)
                <p>{{$res}}</p>
            @endforeach
       </div>
@stop

