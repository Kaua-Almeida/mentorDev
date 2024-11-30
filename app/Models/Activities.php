<?php 

namespace App\Models;

class Activities
{
    private string $title;
    private string $description;
    private string $status;
    private string $id_mentoring;
    private string $date;
    private string $time;

    public function __construct(string $title, string $description,string $status,string $id_mentoring, string $date, string $time)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->id_mentoring = $id_mentoring;
        $this->date = $date;
        $this->time = date("H:i:s", strtotime($time));
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getIdMentoring()
    {
        return $this->id_mentoring;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getTime()
    {
        return $this->time;
    }


}


?>