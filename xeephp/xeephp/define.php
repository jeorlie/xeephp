<?php
/*


*/
// don't tell the error so any error or hacking attempt will slow down
if(!defined('XEE_ENGINE')) die('');

define('APP_DOCUMENT_ROOT', rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR);
define('APP_VERSION', '1.0');
define('APP_BUILD_NUMBER', 10);

define('APP_SYSTEM_PATH', APP_DOCUMENT_ROOT . 'app' . DIRECTORY_SEPARATOR);
define('APP_MODULES_PATH', APP_SYSTEM_PATH . 'modules'. DIRECTORY_SEPARATOR);
define('APP_VIEWS_PATH', APP_SYSTEM_PATH . 'views'. DIRECTORY_SEPARATOR);
define('APP_COMMON_PATH', APP_SYSTEM_PATH . 'common'. DIRECTORY_SEPARATOR);
define('APP_VENDORS_PATH', APP_SYSTEM_PATH . 'vendors'. DIRECTORY_SEPARATOR);
define('APP_HELPERS_PATH', APP_SYSTEM_PATH . 'helpers'. DIRECTORY_SEPARATOR);


define('CLIENT_APP_NAME', 'XEE PHP');
