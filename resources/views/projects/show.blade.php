@extends('layout')


@section('content')



    @foreach($projects as $project)


        <ul>

            <li> <strong> <a href="/projects/{{$project->id}}/edit">{{$project->title}}</a></strong></li>
            {{$project->description}}

            <div>

                @foreach($project->tasks as $task)

                    <li> {{$task->description}}</li>






                    <form>



                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio" aria-label="Radio button for following text input">
                                </div>
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                    </form>


                @endforeach



            </div>
        </ul>
    @endforeach



@endsection
