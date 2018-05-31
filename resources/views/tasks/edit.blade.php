@extends('layouts.app')

@section('content')

    <h1>Edit task {{ $task->id }} </h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection