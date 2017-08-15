@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Edit Tasks</div>

                         <div class="panel-body">
                            {!! Form::model($task, [
                            'method' => 'PATCH',
                            'route' => ['tasks.update', $task->id]
                        ]) !!}

                            <div class="form-group @if ($errors->get('title')): has-error @endif">
                                {!! Form::label('name', 'Title:', ['class' => 'control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                    <p class="help-block">{{ $errors->first('name') }}</p>
                                @endif
                            </div>

                            <div class="form-group @if ($errors->get('description')): has-error @endif">
                                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('description'))
                                    <p class="help-block">{{ $errors->first('description') }}</p>
                                @endif
                            </div>

                            {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}
                             <a href="{{ route('tasks.index') }}"><span class="btn btn-primary">Back</span></a>
                            {!! Form::close() !!}

                        @stop
                         </div>
                </div>
            </div>
        </div>
    </div>
