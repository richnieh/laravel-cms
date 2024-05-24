@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
{{--    start the form to create form--}}
    {{html()->form('post','/posts')->acceptsFiles()->class('form-control')->open()}}
{{--    form group--}}
    {{html()->div()->class('form-group')->open()}}
{{--    inputs for user id, title and content --}}
    {{html()->label('User_id:', 'user_id')->class('form-label')}}
    {{html()->text('user_id')->placeholder('insert ID')->class('form-control')}}
    {{html()->label('Title:', 'title')->class('form-label')}}
    {{html()->text('title')->placeholder('insert title')->class('form-control')}}
    {{html()->label('Content','content')->class('form-label')}}
    {{html()->text('content')->placeholder('insert content')->class('form-control mb-3')}}
{{--  file input  --}}
    {{html()->div()->class('form-control mb-3')->open()}}
    {{html()->label('Input File','file')->class('btn btn-primary')}}
    {{html()->file('file')->class('d-none')}}
    {{html()->div()->close()}}
{{--  submit post --}}
    {{html()->button('Submit')->value('Create Post')->class('btn btn-primary mb-3')}}
    {{html()->div()->close()}}
    {{html()->form()->close()}}
{{--display error message if the submitted data is not validated--}}
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

