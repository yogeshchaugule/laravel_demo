<?php
namespace App\Http\Helpers;

use Illuminate\Http\Request;

class CURLController
{
  /*protected $url = '';
  public function __construct($url = '') {
    $this->url = $url;
  }*/

  static function _getData($url) {
    return "Success : {$url}";
  }
}
