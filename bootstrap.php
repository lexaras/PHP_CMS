<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/admin/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

//database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'mycms',
    'user'     => 'root',
    'password' => 'mysql'
);
ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT .'/app/views');
//echo APP_ROOT;
define('BASE_URL', 'http://localhost/PHP_CMS/');

//$db= new PDO('mysql:host=127.0.0.1;dbname=cms', 'root', 'mysql');

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

require 'app/functions.php';
