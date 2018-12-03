<?php
//ini_set("display_errors", 1);
//ini_set('display_startup_errors', 1);
//opcache_reset(); 

//error_reporting(E_ALL);
//define('APP_PATH', str_replace(DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, str_replace('config', '', dirname(__FILE__)) . DIRECTORY_SEPARATOR));
define('APP_PATH', str_replace('configs', '', dirname(__FILE__))); 

define('CONFIG',APP_PATH.'config/');
define('APPS',APP_PATH.'apps/');
define('INCLUDES',APP_PATH.'includes/');
define('TEMPLATES',APP_PATH.'templates/');
define('CLASSES',INCLUDES.'classes/');
define('THEME','default');
define('GALLERY', APP_PATH.'web/gallery/');

//mail configure
define('MAIL_FROM', 'info@yogabar.sg');
define('MAIL_FROM_NAME', 'yogabar.sg');

//Html default page settings
define('SMARTY_RESOURCE_CHAR_SET', 'utf-8');
require_once INCLUDES . 'smarty/libs/Smarty.class.php';
require_once INCLUDES . 'image.php';
require_once INCLUDES . 'function.php';
require_once INCLUDES.'MySQLi.php';


//Global error Message
global $errors;
error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);

// Setup Smarty
$smarty = new Smarty();
$smarty->setTemplateDir(TEMPLATES . THEME);
$smarty->setCompileDir(APP_PATH . 'template_c');
$smarty->setConfigDir(CONFIG);

/*//Cache management
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->setCacheDir(APP_PATH . 'cache');
*/

// Debug Mode 
$smarty->debugging = false;

//For test the Smarty project setup
//$smarty->testInstall();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '1234');
define('DB_NAME', 'yogabar_beta');
define('DB_PORT', '3306');
// Connect to DB...
$db = new MySQL(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
header('Content-Type: text/html; charset=UTF-8');
