<?php

function _helper_function() {
  $helper_directory = 'app/Http/Helpers/';
  $helper_classes = glob(__DIR__ . '/*.php');
  foreach ($helper_classes as $helper_class) {
    $file_name = explode('/', $helper_class);
    echo end($file_name);
  }
  // echo "<pre>"; print_r($files); echo "</pre>";
  return 'test';
}
