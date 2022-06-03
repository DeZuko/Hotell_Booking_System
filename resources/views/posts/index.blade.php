@extends('layouts.app')
@section('content')
    <h1>Reviews</h1>
    @if (count($posts) > 0)<br>
        @foreach($posts as $posts)
        <div class="well">
            <ul> 
                <li class='list-group-item'>
                    <h3><a href="/posts/{{$posts->id}}">{{$posts->title}}</h3>
                    <small> Written on {{$posts->created_at}}</small>
                    {{-- <br><br> --}}
                </li>
            </ul>
        </div>
        @endforeach
    @else 
        <p> No review found </p>
    @endif
@endsection