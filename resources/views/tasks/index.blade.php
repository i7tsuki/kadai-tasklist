<html>
    <head>
        <title>タスク一覧</title>
    </head>
    <body>
        <a href="/tasks/create">タスク追加</a>
        <table>
            <tr>
                <th>ID</th><th>タスク名</th>
            </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->content }}</td>
                <td><a href="/tasks/{{$task->id}}">詳細</a></td>
            </tr> 
        @endforeach
        </table>
    </body>
</html>