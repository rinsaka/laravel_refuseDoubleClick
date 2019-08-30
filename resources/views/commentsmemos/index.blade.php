<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Comments</title>

  <script>
  function checkDoubleClick() {
    var elems = document.getElementsByClassName('doubleClickDisabled');
    if (elems[0].disabled) {
      return false;
    } else {
      for (var i = 0; i < elems.length; i++) {
        elems[i].disabled = true;
      }
      return true;
    }
  }
  </script>
</head>
<body>
  <h1>複数のフォーム</h1>
  <p>
    ページ内に複数のフォームがあるときに，効率的にダブルクリックを拒否したい．ポイントは「投稿」ボタンすべてに同じ名前のクラスを設定し，Javascript でそのクラスをベースに処理する．
  </p>
  <h2>Comments</h2>
  <div>
    <form method="post" action="{{ url('/commentsmemos/comments') }}" onsubmit="return checkDoubleClick();">
        @csrf
        <p>
            <label for="comment">Comment: </label>
            <input type="text" name="comment" id="comment" value="" required>
        </p>
        <p>
            <input type="submit" value="投稿" class="doubleClickDisabled">
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
    <form method="post" action="{{ url('/commentsmemos/memos') }}" onsubmit="return checkDoubleClick();">
        @csrf
        <p>
            <label for="memo">Memo: </label>
            <input type="text" name="memo" id="memo" value="" required>
        </p>
        <p>
            <input type="submit" value="投稿" class="doubleClickDisabled">
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
