@extends('layouts.app')

@section('content')

    <h1>Edit task {{ $task->id }} </h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}

@endsection