<?php 


require "vendor/autoload.php";
$routes = include "app/Config/routes.php";


use App\Controllers\HomeAdminController;
use App\Controllers\HomeStudentController;
use App\Controllers\LogoutController;

use App\Controllers\AdminControllers\CreateMentoringController;
use App\Controllers\AdminControllers\CreateMentoringPostController;

use App\Controllers\AdminControllers\CreateActivitiesController;
use App\Controllers\AdminControllers\CreateActivitiesPostController;;

use App\Controllers\AdminControllers\CreateUsersController;
use App\Controllers\AdminControllers\CreateUsersPostController;

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];



if (isset($routes[$method][$uri])) {
    $controllerClass = $routes[$method][$uri];
 
    $controller = new $controllerClass();
   
} 
else {

     http_response_code(404);
    die;
}

$controller->processaRequisicao();



?>