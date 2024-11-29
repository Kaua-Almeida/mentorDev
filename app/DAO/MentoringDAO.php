<?php

namespace App\DAO;

use App\Models\Mentoring;
use Exception;
use PDO;

class MentoringDAO
{
    static $conn;

    public function __construct(PDO $databese)
    {
        self::$conn = $databese;
    }
    public function createMentoring(Mentoring $mentoring)
    {
        $sql = "INSERT INTO `mentoring`( `title`, `description`, `date_event`, `time_event`, `status`) VALUES (:title,:description,:date_event,:time_event,:status)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(":title", $mentoring->getTitle());
        $stmt->bindValue(":description", $mentoring->getDescription());
        $stmt->bindValue(":date_event", $mentoring->getDate());
        $stmt->bindValue(":time_event", $mentoring->getTime());
        $stmt->bindValue(":status", $mentoring->getStatus());

        try {
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            echo "Erro ao criar mentoria" . $e->getMessage();
            return false;
        }
    }
    public function findAllMentoring()
    {
        $sql = "SELECT * FROM `mentoring`";
        $stmt = self::$conn->prepare($sql);

        try{
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Erro".$e->getMessage();
            return false;
        }

    }
}
