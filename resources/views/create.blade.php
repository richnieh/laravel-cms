@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="post" action="/posts" class="form-control">
        <input type="text" name="user_id" placeholder="insert ID"><br />
        <input type="text" name="title" placeholder="insert title"><br />
        <input type="text" name="content" placeholder="insert content">
        <input type="submit" value="Submit">
        @csrf
    </form>
@endsection
