<?php
/*

*/

class Index_Router_Xee extends Xee_PHP{
  private $__TEMPLATE;
  function __construct(){
    $this->__TEMPLATE = new App_View_Template();
  }

  function __destruct(){

  }

  public function init() {

    $this->__TEMPLATE->addHeader(array(
      'title' => 'Home | '. CLIENT_APP_NAME,
    ));
    $this->__TEMPLATE->addView('index/index');
    $this->__TEMPLATE->addFooter();
  }

}
