@extends('layouts.app')

@section('content')

<!-- Write content for each page here -->
    <h1>ToDo list</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
   {!! link_to_route('tasks.create', 'Adding Task') !!}

@endsection