<?php 
namespace App\Controllers\AdminControllers;

use App\Config\Database;
use App\Controllers\Controller;
use App\DAO\MentoringDAO;
use App\Models\Mentoring;

class CreateMentoringPostController implements Controller
{
    public function processaRequisicao(): void
    {
        if(isset($_POST)){
            $mentoring = new Mentoring($_POST["title"],$_POST["description"],$_POST["status"],$_POST["date"],$_POST["time"]);
            $mentoringDAO = new MentoringDAO(Database::connection());
          
            if( $mentoringDAO->createMentoring($mentoring)){
                header("location:/home/admin");
                return;
            }
            else{
                echo "erro";
            }
           
        }
    }
}


?>