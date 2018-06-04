@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>ToDo list</h1>
    
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>STATUS</th>
                    <th>TASK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->status}}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', 'Adding Task', null, ['class' => 'btn btn-primary']) !!}

@endsection