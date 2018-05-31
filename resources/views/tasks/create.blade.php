@extends('layouts.app')

@section('content')

    <h1>Adding task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}

@endsection