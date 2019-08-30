<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Memos</title>
</head>
<body>
  <h1>Memos</h1>
  <p>
    このページでは「投稿」ボタンをダブルクリックすると２重に投稿可能です．
  </p>
  <div>
    <form method="post" action="{{ url('/memos') }}">
        @csrf
        <p>
            <label for="memo">Comment: </label>
            <input type="text" name="memo" id="memo" value="" required>
        </p>
        <p>
            <input type="submit" value="投稿">
        </p>
    </form>
  </div>
  <ul>
    @foreach ($memos as $memo)
      <li>{{ $memo->created_at }} | {{ $memo->memo }}</li>
    @endforeach
  </ul>
  <p>
    <a href="/">戻る</a>
  </p>
</body>
</html>
