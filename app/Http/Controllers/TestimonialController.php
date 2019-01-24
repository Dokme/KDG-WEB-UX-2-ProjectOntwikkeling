<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
  public $color = 'green';
  public $title = 'Hun verhaal';
  public function index()
  {
    $highlight = Testimonial::where('highlight', 1)->first();
    $testimonials = Testimonial::where(['published' => 1, 'highlight' => 0])->get();
    $data = [
      'highlight' => $highlight,
      'testimonials' => $testimonials,
      'title'=> $this->title,
      'color' => $this->color,
    ];

    return view('testimonials.index', $data);
  }

  public function create()
  {
    return view('testimonials.create', ['title'=>'Mijn verhaal', 'color' => $this->color]);
  }

  public function show($id)
  {
    $testimonial = Testimonial::findOrFail($id);

    $data = [
      'testimonial' => $testimonial,
      'title'=> $this->title,
      'color' => $this->color,
    ];
    return view('testimonials.show', $data);
  }

  public function post(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'title' => 'required|string|min:4|max:255',
      'body' => 'required|string|min:50|max:2500',
    ]);

    $testimonial = new Testimonial();
    $testimonial->email = $request->email;
    $testimonial->title = $request->title;
    $testimonial->body = $request->body;
    $testimonial->save();

    $data = [
      'title' => 'Verhaal toegevoegd! | ' . $this->title,
      'testimonial_title' => $testimonial->title,
      'no_footer' => true,
    ];
    return view('testimonials.success', $data);
  }

  function accept_testimonial($id)
  {
    $test = Testimonial::findOrFail($id);
    $test->published = true;
    $test->save();
    
    $message = 'Het verhaal werd succesvol gepubliceerd!';      
    // TODO: send email to sender
    return redirect()->route('admin.index')->with('status', $message);
  }

  function reject_testimonial($id)
  {
    $test = Testimonial::findOrFail($id);
    $test->published = false;
    $test->save();

    $message = 'Het verhaal werd succesvol weerhouden.';      
    return redirect()->route('admin.index')->with('status', $message);
  }

  function highlight($id) 
  {
    $current = Testimonial::where('highlight', 1)->first();
    if(isset($current)){
      $current->highlight = false;
      $current->save();
    }
    if (!isset($current) || $id != $current->id) {
      $new = Testimonial::findOrFail($id);
      $new->highlight = true;
      $new->save();
      $message = 'Het verhaal werd succesvol gehighlight!';      
    } else {
      $message = 'De highlight werd van het verhaal gehaald.';            
    }
    return redirect()->route('admin.index')->with('status', $message);
  }

  function review($id)
  {
    $testimonial = Testimonial::findOrFail($id);

    $data = [
      'testimonial' => $testimonial,
      'admin' => true,
      'title' => 'Verhaal Review | ' . $this->title,
      'color' => 'primary',
      'no_footer' => true,
    ];
    return view('testimonials.review', $data);
  }
}
