<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>Comments</title>


</head>
<body>
  <h1>万能なダブルクリック拒否</h1>
  <p>
    ページ内に複数のフォーム（やサブミットボタン）があっても，効率的にダブルクリックを拒否したい．
  </p>
  <h2>Comments</h2>

  <ul>
    @foreach ($comments as $comment)
      <li>{{ $comment->created_at }} | {{ $comment->comment }}</li>
    @endforeach
  </ul>

  <h2>Memos</h2>
  <div>

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
