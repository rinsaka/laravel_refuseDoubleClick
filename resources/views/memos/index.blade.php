<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Memos</title>

  <script>
  function checkDoubleClick() {
    var elem = document.getElementById('btn_submit');
    if (elem.disabled) {
      return false;
    } else {
      elem.disabled = true;
      return true;
    }
  }
  </script>
</head>
<body>
  <h1>Memos</h1>
  <p>
    このページでは「投稿」ボタンをダブルクリックを拒否します．
  </p>

  <div>
    <form method="post" action="{{ url('/memos') }}" onsubmit="return checkDoubleClick();">
        @csrf
        <p>
            <label for="memo">Comment: </label>
            <input type="text" name="memo" id="memo" value="" required>
        </p>
        <p>
            <input type="submit" value="投稿" id="btn_submit">
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
