<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Comments</title>
</head>
<body>
  <h1>Comments</h1>
  <p>
    このページでは「投稿」ボタンをダブルクリックすると２重に投稿可能です．
  </p>
  <div>
    <form method="post" action="{{ url('/comments') }}">
        @csrf
        <p>
            <label for="comment">Comment: </label>
            <input type="text" name="comment" id="comment" value="" required>
        </p>
        <p>
            <input type="submit" value="投稿">
        </p>
    </form>
  </div>
  <ul>
    @foreach ($comments as $comment)
      <li>{{ $comment->created_at }} | {{ $comment->comment }}</li>
    @endforeach
  </ul>
  <p>
    <a href="/">戻る</a>
  </p>
</body>
</html>
