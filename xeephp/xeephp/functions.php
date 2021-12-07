<?php
/*
*
*
*/

// don't tell the error so any error or hacking attempt will slow down
if(!defined('XEE_ENGINE')) die('');

class Xee_Functions {

  public function xee_is_empty($t)
  {
    $y = trim($t);
    return (empty($y) && strlen($y) == 0) ? true : false;
  }

  //----------------------------------------------------------------------------

  public function xee_debug($t)
  {
    echo '<pre>';
    print_r($t);
    echo '</pre>';
  }

  //----------------------------------------------------------------------------

  public function xee_go_to_base_url()
  {
    header('Location: /');
    exit;
  }
  //----------------------------------------------------------------------------

}
