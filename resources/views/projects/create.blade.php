@extends('layout')



@section('content')


    <form method="post" action="/projects">
        @csrf


        <div>

        <input type="text" name="title" required value="{{old('title')}}">
        </div>

        <div>
        <textarea name="description" placeholder="description" required value="{{old('description')}}"></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary"> Create Project</button>





    @foreach($errors->all() as $error)

        <ul>


            <li> {{$error}}</li>



        </ul>



        @endforeach



    </form>



    @endsection

