@extends('layouts.app')

@section('content')

    <h1>Adding task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}

@endsection