<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Testimonial;
use App\HowScenario;

class AdminController extends Controller
{
    public $color = 'primary';
    public $no_footer = true;
    public $title = 'Admin Panel';
    
    function index()
    {
      $unseen = Testimonial::whereRaw('created_at = updated_at')->get();
      $seen = Testimonial::whereRaw('created_at != updated_at')->get();
      $scenarios = HowScenario::all();
      $contactSections = Content::where('page', 'contact')->get();
      $whatSections = Content::where('page', 'what')->get();
      $data = [
        'title' => $this->title,
        'unseen' => $unseen,
        'seen' => $seen,
        'color' => $this->color,
        'no_footer' => $this->no_footer,
        'scenarios' => $scenarios,
        'contactSections' => $contactSections,
        'whatSections' => $whatSections,
      ];

      return view("admin.index", $data);
    }

    function login()
    {
      return view('admin.login', ['no_footer' => $this->no_footer]);
    }
}
