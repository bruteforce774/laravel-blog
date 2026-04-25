<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>My Blog</h1>
  
    @foreach ($posts as $post)
        <article>
            <h2>{{ $post['title'] }} </h2>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
</body>
</html>
