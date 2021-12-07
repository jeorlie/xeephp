<?php
/*

config.php

*/
// don't tell the error so any error or hacking attempt will slow down
if(!defined('XEE_ENGINE')) die('');

// DEVELOPMENT_SETTINGS

date_default_timezone_set('Asia/Manila');
error_reporting(E_ALL | E_STRICT | E_WARNING | E_CORE_WARNING);
ini_set("display_errors", true);


// PRODUCTION_SETTINGS
/*

date_default_timezone_set('Asia/Manila');
error_reporting(0);
ini_set("display_errors", false);

*/
