<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Comments</title>
</head>
<body>
  <h1>Comments</h1>
  <ul>
    @foreach ($comments as $comment)
      <li>{{ $comment->created_at }} | {{ $comment->comment }}</li>
    @endforeach
  </ul>
</body>
</html>
