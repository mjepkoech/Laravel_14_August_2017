@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Tasks List</div>

                        <div class="panel-body">
                            <p><a href="{{ route('tasks.create') }}">Click here to add task</a></p>
                            <hr>

                            @if(Session::has('flash_message'))
                                <div class="alert alert-success fade in">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ Session::get('flash_message') }}
                                </div>
                            @endif

                            @foreach($tasks as $task)
                                <h3>{{ $task->name }}</h3>

                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-warning">View Task</a>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['tasks.destroy', $task->id]
                                        ]) !!}
                                        {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                        @stop
                    </div>
                </div>
            </div>
        </div>
    </div>
