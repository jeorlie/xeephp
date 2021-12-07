<?php
/**
* Author: @cloudwhen
* File: Xee PHP
* Description: A dirt simple php template
*/
define('XEE_ENGINE', true);

class Xee_PHP {
  private $__PARSE_URL;
  private $__URL;
  private $__WHITELIST_URL;

  function __construct(){
    $lxldir = __dir__ . DIRECTORY_SEPARATOR;
    $this->__PARSE_URL = parse_url($_SERVER['REQUEST_URI']);
    $this->__URL = explode('/', ltrim($this->__PARSE_URL['path'], '/'));

    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    require $lxldir . 'define.php';
    require $lxldir . 'functions.php';
    require $lxldir . 'config.php';
    require $lxldir . 'route-whitelist.php';
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    $xf = new Xee_Functions();
    if(stripos($this->__URL[0], 'index') !== false) {
      $xf->xee_go_to_base_url();
    }
    if($xf->xee_is_empty($this->__URL[0])) {
      $this->__URL[0] = 'index';
    }

    $route = new Xee_Route_Whitelist();
    $this->__WHITELIST_URL = $route->Route_List();
    if(!isset($this->__WHITELIST_URL[$this->__URL[0]])) {
      die('Err:: Route not found!');
    }
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    require $lxldir . 'helpers.php';
    require $lxldir . 'module_loader.php';
    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
  }
  //---------------------------------------------------------------------------
  public function addHeader($__meta = array()) {
    $__meta = array(
      'base_css' => array(
        '/public/css/w3.css',
      ),
      'base_js' => array(
        '/public/js/jquery-3.6.0.min.js',
      ),
    );
    require APP_COMMON_PATH . 'header.php';
  }
  //---------------------------------------------------------------------------
  public function addFooter($vars = array()) {
    require APP_COMMON_PATH . 'footer.php';
  }
  //---------------------------------------------------------------------------
  public function init() {
    $activeClass = $this->__WHITELIST_URL[$this->__URL[0]];
    if(class_exists($activeClass)) {
      $route = new $activeClass();
      $route->init();
    } else {
      die('Err:: Class not found.');
    }
  }
  //---------------------------------------------------------------------------
  function __destruct(){

  }
  //---------------------------------------------------------------------------

}

$app = new Xee_PHP();
$app->init();
