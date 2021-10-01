@extends('layouts.app')

@section('content')
<br>
<a href="/posts" class="btn btn-default">Go Back</a>
    
    <div class="container">
        <h1>{{$showit->title}}</h1>
        <img style="width:100%" src="storage/cover_images/{{$showit->cover_image}}">
        <br>
        <div>
        <p>{{$showit->body}}</p>
        </div>
        <hr>
        <small>{{$showit->created_at}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $showit->user_id)
                <a href="/posts/{{$showit->id}}/edit" class="btn btn-default">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $showit->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
@endsection