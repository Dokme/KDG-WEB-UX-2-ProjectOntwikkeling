<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Purify;

class ContentController extends Controller
{
    public function edit($id)
    {
      $poc = Content::findOrFail($id);
      return view('admin.edit-content', ['content' => $poc]);
    }

    public function update(Request $request)
    {
      $request->validate([
        'title' => 'required|string|min:4',
        'body' => 'nullable|string|min:20',
      ]);
      
      $content = Content::findOrFail($request->id);
      $content->title = $request->title;
      $content->body = Purify::clean($request->body);
      $content->save();

      $message = 'De content werd succesvol aangepast!';
      return redirect()->route('admin.index')->with('status', $message);
    }
}
