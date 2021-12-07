<?php
/*

*/

class Index_Router_Xee extends Xee_PHP{

  function __construct(){

  }

  function __destruct(){

  }

  public function init() {
    parent:: addHeader(array(
      'title' => 'Home | '. CLIENT_APP_NAME,      
    ));
    echo 'hello world!';
    parent:: addFooter();
  }

}
