<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class WhatController extends Controller
{
    public $color = 'yellow';
    public $title = 'Wat is seksuele intimidatie?';

    public function index()
    {
      $content = Content::where('page', 'what')->get();
      $data = [
        'content' => $content,
        'title' => $this->title, 
        'color' => $this->color,
      ];
      return view('what.index', $data);
    }
}
