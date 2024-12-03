<?php 

namespace App\Controllers\AdminControllers;

use App\Config\Database;
use App\Controllers\Controller;
use App\DAO\ClassroomDAO;
use App\Models\Classroom;

class CreateClassroomPostController implements Controller
{
    public function processaRequisicao(): void
    {
        $classroom = new Classroom($_POST["title"],$_POST["description"],$_POST["url"],$_POST["date"],$_POST["time"],$_POST["id_mentoring"]);
        $classroomDAO = new ClassroomDAO(Database::connection());
      
        if( $classroomDAO->createClassroom($classroom))
        {
            header("location:/home/admin");
            return;
        }
       
        echo "erro ao criar aula";
        return;


    }
}

?>