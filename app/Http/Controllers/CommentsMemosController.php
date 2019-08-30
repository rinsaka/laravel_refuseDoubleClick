<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Memo;

class CommentsMemosController extends Controller
{
  public function index()
  {
    $comments = Comment::orderBy('created_at', 'desc')->get();
    $memos = Memo::orderBy('created_at', 'desc')->get();
    return view('commentsmemos.index')
            ->with('comments', $comments)
            ->with('memos', $memos);
  }

  public function comment_store(Request $request)
  {
    $comment = new Comment();
    $comment->comment = $request->comment;
    $comment->save();
    return redirect('/commentsmemos');
  }

  public function memo_store(Request $request)
  {
    $memo = new Memo();
    $memo->memo = $request->memo;
    $memo->save();
    return redirect('/commentsmemos');
  }
}
