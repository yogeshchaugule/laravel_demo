<?php

namespace App\Http\Controllers\pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller {
  public function home() {
    $title = 'Hello Controller!';
    $authors = array('Aaditya', 'Pradeep', 'Yogesh');
    return view('pages.helloworld', compact('title', 'authors'));
  }

  public function about() {
    $title = 'About';
    $authors = array('Aaditya', 'Pradeep', 'Yogesh');
    $content = 'This is called from another controller.';
    return view('pages.helloworld', compact('title', 'authors', 'content'));
  }
}
