@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Tasks List</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Title</td>
                                    <td>{!! $task->name !!}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{!! $task->description !!}</td>
                                </tr>
                                <tr>
                                    <td>User</td>
                                    <td>{!! $task->user->name !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <h1>{{ $task->title }}</h1>
                        <p class="lead">{{ $task->description }}</p>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all tasks</a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                            </div>
                            <div class="col-md-4 text-right">
                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['tasks.destroy', $task->id]
                                ]) !!}
                                {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>

                    @stop
                    </div>
                </div>
            </div>
        </div>
    </div>
