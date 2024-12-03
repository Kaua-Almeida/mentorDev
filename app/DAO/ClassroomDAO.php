<?php 
namespace App\DAO;

use App\Models\Classroom;
use Exception;
use PDO;

class ClassroomDAO
{
    static $conn;

    public function __construct(PDO $databese)
    {
        self::$conn = $databese;
    }
    public function createClassroom(Classroom $classroom)
    {
        $sql = "INSERT INTO `classroom`( `title`, `description`,`url`, `date_classroom`, `time_classroom`,`id_mentoring`) VALUES (:title,:description,:url,:date_event,:time_event,:id_mentoring)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(":title", $classroom->getTitle());
        $stmt->bindValue(":description", $classroom->getDescription());
        $stmt->bindValue(":url",$classroom->getUrl());
        $stmt->bindValue(":date_event", $classroom->getDate());
        $stmt->bindValue(":time_event", $classroom->getTime());
        $stmt->bindValue(":id_mentoring",$classroom->getIdMentoring());
 

        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            echo "Erro ao criar Aula" . $e->getMessage();
            return false;
        }
    }
    public function findAllclassroom()
    {
        // $sql = "SELECT * FROM `mentoring`";
        // $stmt = self::$conn->prepare($sql);

        // try{
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // } catch (Exception $e) {
        //     echo "Erro".$e->getMessage();
        //     return false;
        // }

    }
}


?>