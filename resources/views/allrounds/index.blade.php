<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Comments</title>

  <script>
  var btn_submitted = 0;
  function checkDoubleClick() {
    if (btn_submitted > 0) {
      return false;
    } else {
      btn_submitted = 1;
      return true;
    }
  }
  </script>

</head>
<body>
  <h1>万能なダブルクリック拒否</h1>
  <p>
    ページ内に複数のフォーム（やサブミットボタン）があっても，効率的にダブルクリックを拒否したい．
  </p>
  <h2>Comments</h2>
  <div>
    <form method="post" action="{{ url('/allrounds/comments') }}" onsubmit="return checkDoubleClick();">
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
    <form method="post" action="{{ url('/allrounds/memos') }}" onsubmit="return checkDoubleClick();" >
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
