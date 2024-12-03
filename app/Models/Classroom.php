<?php 

namespace App\Models;


class Classroom 
{
    private string $title;
    private string $description;
    private string $url;
    private string $date;
    private string $time;
    private string $id_mentoring;

    public function __construct(string $title, string $description, string $url, string $date_classroom,string $time_classroom,string $id_mentoring)
    {
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->date = $date_classroom;
        $this->time = date("H:i:s", strtotime($time_classroom));
        $this->id_mentoring = $id_mentoring;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getUrl()
    {
        return $this->url;
    }
 
    public function getDate()
    {
        return $this->date;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function getIdMentoring()
    {
        return $this->id_mentoring;
    }

}


?>