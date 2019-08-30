<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Comments</title>
</head>
<body>
  <h1>複数のフォーム</h1>
  <p>
    ページ内に複数のフォームがあるときに，効率的にダブルクリックを拒否したい．
  </p>
  <h2>Comments</h2>
  <div>
    <form method="post" action="{{ url('/commentsmemos/comments') }}">
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

  <h2>Memos</h2>
  <div>
    <form method="post" action="{{ url('/commentsmemos/memos') }}">
        @csrf
        <p>
            <label for="memo">Memo: </label>
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
