@extends('layout')


@section('title', 'Welcome Page')

@section('content')
    <h1> My First Website</h1>

    @foreach($tasks as $task)

        <p>{{$task}}</p>

    @endforeach
    @endsection



