<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
  public function index()
  {
    $comments = Comment::orderBy('created_at', 'desc')->get();
    return view('comments.index')->with('comments', $comments);
  }

  public function store(Request $request)
  {
    $comment = new Comment();
    $comment->comment = $request->comment;
    $comment->save();
    return redirect('/comments');
  }
}
