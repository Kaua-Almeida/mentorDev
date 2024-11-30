<?php 


namespace App\Controllers\AdminControllers;

use App\Config\Database;
use App\Controllers\Controller;
use App\DAO\ActivitiesDAO;
use App\Models\Activities;

class CreateActivitiesPostController implements Controller
{
    public function processaRequisicao(): void
    {
        if(isset($_POST)){
            $activities = new Activities($_POST["title"],$_POST["description"],$_POST["status"],$_POST["id_mentoring"],$_POST["date"],$_POST["time"]);
          $activitiesDAO = new ActivitiesDAO(Database::connection());
          if($activitiesDAO->createActivities($activities)){
            header("location:/home/admin");
            return;
          }
          echo "erro ao criar";
          return; 
         
        }
    }
}



?>