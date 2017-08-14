@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">



                    <div class="panel-heading">Create Task Assignment</div>


                    <div class="panel-body">

                        <a href="{{ route('home') }}"><span class="btn btn-primary">Back</span></a>
                        <p>Add a new task</p>
                        <div class="">

                            {!! Form::open([ 'route' => 'tasks.store', 'method'=>'POST']) !!}

                                {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter task name']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <br/>
                                {!! Form::text('description', null, ['class'=>'form-control', 'placeholder'=>'Enter task description']) !!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
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
