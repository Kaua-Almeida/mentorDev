<?php 
namespace App\DAO;

use App\Models\Activities;
use Exception;
use PDO;

class ActivitiesDAO
{
    protected static $conn;

    public function __construct(PDO $database)
    {
        self::$conn = $database;
    }
    public function createActivities(Activities $activities)
    {
        $sql = "INSERT INTO `activities`( `title`, `description`, `status`, `id_mentoring`, `date_activity`, `time_activity`) VALUES (:title,:description,:status,:id_mentoring,:date_activity,:time_activity)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(":title",$activities->getTitle());
        $stmt->bindValue(":description",$activities->getDescription());
        $stmt->bindValue(":status",$activities->getStatus());
        $stmt->bindValue(":id_mentoring",intval($activities->getIdMentoring()));
        $stmt->bindValue(":date_activity",$activities->getDate());
        $stmt->bindValue(":time_activity",$activities->getTime());
        try{
            $stmt->execute();
            return true;
        }
        catch (Exception $e) {
            echo "Erro". $e->getMessage();
            return false;
        }

    }
}





?>