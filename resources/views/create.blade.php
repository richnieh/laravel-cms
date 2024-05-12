@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {{html()->form('post','/posts')->class('form-control')->open()}}
    {{html()->div()->class('form-group')->open()}}
    {{html()->label('User_id:', 'user_id')->class('form-label')}}
    {{html()->text('user_id')->placeholder('insert ID')->class('form-control')}}
    {{html()->label('Title:', 'title')->class('form-label')}}
    {{html()->text('title')->placeholder('insert title')->class('form-control')}}
    {{html()->label('Content','content')->class('form-label')}}
    {{html()->text('content')->placeholder('insert content')->class('form-control')}}
    {{html()->button('Submit')->value('Submit')->class('btn btn-primary mb-3')}}
    {{html()->div()->close()}}
    {{html()->form()->close()}}

    @if(count($errors)>0)
        {{html()->div()->class('alert alert-danger')->open()}}
        <ul style="list-style: none">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        {{html()->div()->close()}}
    @endif

@endsection

