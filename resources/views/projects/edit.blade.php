@extends('layout')


@section('title', 'Edit')

@section('content')


    <h2> Edit</h2>


    <form method="post" action="/projects/{{$project->id}}">
        @method('PATCH')
        @csrf


        <div>
        <label class="label" for="title"> Title</label>



        <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
        </div>


        <div>
        <label class="label" for="description"> Description</label>



        <input type="text" class="input" name="description" placeholder="description" value="{{$project->description}}">

        </div>

        <div>
        <button type="submit" class="btn btn-primary"> Edit</button>
        </div>


    </form>


    <form method="post" action="/projects/{{$project->id}}">

        @method('delete')
        @csrf


        <button type="submit" class="btn btn-primary"> Delete Project</button>



    </form>


    @endsection
