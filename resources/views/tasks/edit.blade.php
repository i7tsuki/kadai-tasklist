@extends('layouts.app')

@section('content')

    <a href="/">戻る</a>
    <p>ID:{{$task->id}}</p>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('content', 'メッセージ:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@endsection