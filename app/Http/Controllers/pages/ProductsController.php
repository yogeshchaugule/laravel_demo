<?php

namespace App\Http\Controllers\pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\CURLController;

class ProductsController extends Controller
{
    //
    public function index() {
      $title = 'Products List';
      $content = 'Your products will be shown here:';
      // $content .= _helper_function();
      $content .= '<br>' . CURLController::_getData('http://uat.contentcentral.co/api/node.json') . '</br>';
      return view('pages.products.index', compact('title', 'content'));
    }
}
