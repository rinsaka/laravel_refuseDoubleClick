<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Memo;

class AllroundsController extends Controller
{
  public function index()
  {
    $comments = Comment::orderBy('created_at', 'desc')->get();
    $memos = Memo::orderBy('created_at', 'desc')->get();
    return view('allrounds.index')
            ->with('comments', $comments)
            ->with('memos', $memos);
  }
}
