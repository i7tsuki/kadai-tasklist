<html>
    <head>
        <title>タスク詳細</title>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th><th>タスク名</th>
            </tr>
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->content }}</td>
            </tr> 
        </table>
        <a href="/tasks/{{$task->id}}/edit">編集する</a>        
        <form action="/tasks/{{$task->id}}" method="POST">
             {{ csrf_field() }}
             <input name="_method" type="hidden" value="DELETE">
             <input type="submit" value="削除する">
        </form>
    </body>
</html>