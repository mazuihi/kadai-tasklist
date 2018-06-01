@extends('layouts.app')

@section('content')

    <h1>Details about Task{{ $task->id }} </h1>

    <p>Status:{{ $task->status}}</p>
    <p>Tasklist:{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'Edit the task', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Deliete') !!}
    {!! Form::close() !!}

@endsection