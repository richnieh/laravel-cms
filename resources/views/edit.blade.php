@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('posts.update', $post->id)}}" class="form-control">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <input type="text" name="user_id" placeholder="insert user_id"><br />
        <input type="text" name="title" placeholder="insert title"><br />
        <input type="text" name="content" placeholder="insert content"><br />
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    <form method="post" action="{{route('posts.destroy',$post->id)}}" class="form-control">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
@endsection
