<?php 

namespace App\Controllers\AdminControllers;

use App\Controllers\Controller;

class CreateActivitiesController implements Controller
{
    public function processaRequisicao(): void
    {
        require "./includes/views/admin/createActivities.php";
    }
}





?>