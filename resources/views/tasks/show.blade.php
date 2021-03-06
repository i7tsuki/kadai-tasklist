@extends('layouts.app')

@section('content')

    <table>
        <tr>
            <th>ID</th><th>タスク名</th><th>ステータス</th>
        </tr>
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->content }}</td>
            <td>{{ $task->status }}</td>
        </tr> 
    </table>
    
    {{-- タスク編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

    {{-- タスク削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection