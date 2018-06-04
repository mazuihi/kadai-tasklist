@extends('layouts.app')

@section('content')

    <h1>Details about Task{{ $task->id }} </h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>TASK</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'Edit the task', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELIETE', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection