<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require dirname(__FILE__).'/../vendor/autoload.php';
require dirname(__FILE__).'/dao/BookDao.class.php';

require dirname(__FILE__).'/services/BookService.php';

Flight::map('query', function($name, $default_value = NULL){
  $request = Flight::request();
  $query_param = @$request->query->getData()[$courseName];
  $query_param = $query_param ? $query_param : $default_value;
  return $query_param;
});

/* Register Business Logic layer services */
Flight::register('bookService', 'BookService');

/* Include all routes */
require_once dirname(__FILE__)."/routes/BookRoutes.php";

Flight::start();
?>