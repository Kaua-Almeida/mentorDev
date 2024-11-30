<?php
declare(strict_types=1);

use App\Controllers\AdminControllers\CreateActivitiesController;
use App\Controllers\AdminControllers\CreateActivitiesPostController;
use App\Controllers\AdminControllers\CreateMentoringController;
use App\Controllers\AdminControllers\CreateMentoringPostController;
use App\Controllers\HomeAdminController;

use App\Controllers\HomeStudentController;
use App\Controllers\LoginController;
use App\Controllers\LoginRequestController;
use App\Controllers\LogoutController;

return
[
    "GET" => 
    [
        "/" => LoginController::class,
        "/logout" => LogoutController::class,
        "/home/student" => HomeStudentController::class,
        "/home/admin" => HomeAdminController::class,
        "/admin/createMentoring" => CreateMentoringController::class,
        "/admin/createActivities" => CreateActivitiesController::class
    ],
    "POST" =>
    [
        "/" => LoginRequestController::class,
        "/admin/createMentoring" => CreateMentoringPostController::class,
        "/admin/createActivities" => CreateActivitiesPostController::class
    ]
    ];




?>