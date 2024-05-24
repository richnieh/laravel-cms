@extends('layouts.app')

@section('content')
    {{html()->div()->class('form-control')->open()}}
    <ul>
        @foreach($posts as $post)
            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
            <img src="{{$post->path}}" height="100px" alt="{{$post->path}}">
        @endforeach
    </ul>
    {{html()->div()->close()}}
@endsection
