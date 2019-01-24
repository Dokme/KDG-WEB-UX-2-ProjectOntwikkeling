<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContactController extends Controller
{
    public $color = 'red';
    public $title = 'Waar kan je terecht?';

    public function index()
    {

      $content = Content::where('page', 'contact')->get();

      $data = [
        'content' => $content, 
        'title' => $this->title, 
        'color' => $this->color,
      ];
      return view('contact.index', $data);
    }
}
