@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">



                    <div class="panel-heading">New Students Form</div>


                    <div class="panel-body">

                        <p>Add a new student</p>
                        <div class="">

                            {!! Form::open([ 'route' => 'students.store', 'method'=>'POST']) !!}

                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter student name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            <br/>
                            {!! Form::text('class', null, ['class'=>'form-control', 'placeholder'=>'Enter student class']) !!}
                            @if ($errors->has('class'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                            @endif
                            <br/>

                            {!! Form::submit('Add', ['class'=>'btn btn-primary'])!!}

                            {!! Form::close() !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
