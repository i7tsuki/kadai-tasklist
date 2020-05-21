@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <th>ID</th><th>タスク名</th><th>ステータス</th>
        </tr>
    @foreach ($tasks as $task)
        <tr>
            <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
        </tr> 
    @endforeach
    </table>

@endsection