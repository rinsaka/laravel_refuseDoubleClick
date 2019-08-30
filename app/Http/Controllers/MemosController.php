<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memo;

class MemosController extends Controller
{
  public function index()
  {
    $memos = Memo::orderBy('created_at', 'desc')->get();
    return view('memos.index')->with('memos', $memos);
  }

  public function store(Request $request)
  {
    $memo = new Memo();
    $memo->memo = $request->memo;
    $memo->save();
    return redirect('memos');
  }
}
