@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    {{html()->form('patch')->route('posts.update',$post->id)->class('form-control')->open()}}
    {{html()->label('User_id:','user_id')->class('form-label')}}
    {{html()->text('user_id')->placeholder('insert id')->class('form-control mb-3')}}
    {{html()->label('Title:','title')->class('form-label')}}
    {{html()->text('title')->placeholder('insert title')->class('form-control')}}
    {{html()->label('Content:','content')->class('form-label')}}
    {{html()->text('content')->placeholder('insert content')->class('form-control mb-3')}}
    {{html()->button('Submit')->class('btn btn-primary')}}
    {{html()->form()->close()}}
    {{html()->form('Delete')->route('posts.destroy',$post->id)->class('form-control')->open()}}
    {{html()->button('Delete')->class('btn btn-danger')}}
    {{html()->form()->close()}}
@endsection
