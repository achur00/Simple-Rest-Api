<?php
require_once __DIR__ .'/vendor/autoload.php';
use Dotenv\Dotenv;
use App\System\DatabaseConnector;


$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// var_dump(getenv('OKTAAUDIENCE')); If you're running this script from a web server (like Apache or Nginx), note that the getenv() function may not return the expected results due to how these servers handle environment variables.
// var_dump($_ENV['OKTAAUDIENCE']);

$dbConnection = (new DatabaseConnector($_ENV['DB_HOST'],$_ENV['DB_PORT'],$_ENV['DB_DATABASE'],$_ENV['DB_USERNAME'],$_ENV['DB_PASSWORD']))->getConnection();