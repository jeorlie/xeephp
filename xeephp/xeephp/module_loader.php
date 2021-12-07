<?php
/*

*/




// load all possible modules the users has created.
// see define.php for more information

if(is_dir(APP_MODULES_PATH)) {
  $modules = array_slice(scandir(APP_MODULES_PATH), 2);
  foreach($modules as $dir) {
    $file = APP_MODULES_PATH . $dir . DIRECTORY_SEPARATOR. 'index.php';
    if(file_exists($file) && is_file($file)) require $file;

  }
}
