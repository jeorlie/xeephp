<?php
/*


*/


// load all possible helpers the users has created.
// see define.php for more information

if(is_dir(APP_HELPERS_PATH)){
  $helpers = array_slice(scandir(APP_HELPERS_PATH), 2);
  foreach($helpers as $helper) {
    $file = APP_HELPERS_PATH . $helper;
    $ext = substr($helper, -10);
    if($ext == 'helper.php')
    {
      if(file_exists($file)) require $file;
    }
  }
}
