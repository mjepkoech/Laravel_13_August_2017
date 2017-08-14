@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Registration</div>

                <div class="panel-body">

                    <a href="{{ route('students.create') }}"><span class="btn btn-primary">Add Student</span></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
