@extends('layouts.app')

@section('content')
    <h1>Review</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'Post']) !!}
    <div class="form-group">
        {{Form::label('title',('Title'))}}
        {{Form::text('title', '',['class' => 'form-control', 'placeholder' => 'What do you think about us?'])}}
        <br>
    </div>

    <div class="form-group">
        {{Form::label('body',('Body'))}}
        {{Form::textarea('body', '',['class' => 'form-control', 'placeholder' => 'Comment'])}}
    </div><br>
    
    {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection