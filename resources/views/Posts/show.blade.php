@extends('layouts.app');

@section('content')
    <p></p>
    <a href="/posts" class = "btn btn-primary"> Go Back </a>
    <h1> {{$post->title}} </h1>    
    <img style ="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div> {{$post->body}} </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small></small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <p>
            <a href="/posts/{{$post->id}}/edit" class = "btn btn-primary"> Edit </a>
            {!!Form::Open(['action' => ['PostsController@destroy', $post->id, 'method' => 'POST', 'class' => 'float-right']])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::Close()!!}
            </p>
        @endif
    @endif
    <p></p>
@endsection