<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/messages" method="post">
        @csrf
        <input type="text" name="body">
        <input type="submit" value="投稿">
    </form>
    @foreach ($messages as $message)
        <div>{{ $message->body }}</div>
    @endforeach
</body>
</html>