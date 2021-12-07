<?php
/*

*/

class App_View_Template {

  function __construct(){

  }

  function __destruct(){

  }

  //---------------------------------------------------------------------------
  public function addHeader($__meta) {
    if(!isset($__meta['base_css'])) {
      $__meta['base_css'] = array(
        '/public/css/w3.css',
      );
    }

    if(!isset($__meta['base_css'])) {
      $__meta['base_js'] = array(
        '/public/js/jquery-3.6.0.min.js',
      );
    }

    require APP_COMMON_PATH . 'header.php';
  }
  //---------------------------------------------------------------------------
  public function addView($file)
  {
    require APP_VIEWS_PATH. $file . '.tpl.php';
  }
  //---------------------------------------------------------------------------
  public function addFooter($vars = array()) {
    require APP_COMMON_PATH . 'footer.php';
  }

}
