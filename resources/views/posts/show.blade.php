@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <small> Written by {{$post->created_at}}</small>
    <br><br>
    <div>
        {{$post->body}}
    </div>
@endsection