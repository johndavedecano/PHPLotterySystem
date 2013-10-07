<?php
session_start();
define('BASE_PATH',dirname(__FILE__));
define('ROUTES_PATH',BASE_PATH.'/routes');
define('VENDORS_PATH',BASE_PATH.'/vendor');
define('CONFIGS_PATH',BASE_PATH.'/configs');
define('VIEWS_PATH',BASE_PATH.'/views');
define('CLASSES_PATH',BASE_PATH.'/classes');
define('PUBLIC_PATH',BASE_PATH.'/public');
// DEFAULT TIMEZONE
date_default_timezone_set("Asia/Manila");
if(!isset($_SESSION['slim.flash'])){
    $_SESSION['slim.flash'] = '';
}
/*****************************************************************/
// LOAD THE FRAMEWORK
/*****************************************************************/
require VENDORS_PATH.'/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'mode'  => 'development'
));

include_once VENDORS_PATH.'/autoload.php';
include_once CONFIGS_PATH.'/database.php';
include_once CONFIGS_PATH.'/application.php';

// CREATE ALIAS FOR FACADE
class_alias('Cartalyst\Sentry\Facades\Native\Sentry', 'Sentry');
// Setup our database
$dsn = DRIVER.":dbname=".DBNAME.";host=".DBHOST;
Sentry::setupDatabaseResolver(new PDO($dsn,DBUSER,DBPASS));
// ELOQUENT ORM
$settings = array(
    'driver' => DRIVER,
    'host' => DBHOST,
    'database' => DBNAME,
    'username' => DBUSER,
    'password' => DBPASS,
    'charset' =>  'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => ''
);

// OBJECT MAPPER
$container = new \Illuminate\Container\Container();
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);

// AUTOLOADERS
include_once dirname(__FILE__).'/autoloader.php';
AutoLoader::registerDirectory(dirname(__FILE__).'/models');
AutoLoader::registerDirectory(dirname(__FILE__).'/classes');

// ROUTE FILES
foreach (glob(ROUTES_PATH."/*.php") as $filename)
{
    include_once $filename;
}

// INITIALIZE APPLICATION
$app->run();
?>