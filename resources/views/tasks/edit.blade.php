<htmL>
    <body>
        <a href="/tasks">戻る</a>
        <p>ID:{{$task->id}}</p>
        <form action="/tasks/{{$task->id}}" method="POST">
             {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <input type="text" name="content" value="{{$task->content}}">
            <input type="submit">
        </form>
    </body>
</htmL>