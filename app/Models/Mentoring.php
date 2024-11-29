<?php 

namespace App\Models;

class Mentoring
{
    private string $title;
    private string $description;
    private string $status;
    private string $date;
    private string $time;

    public function __construct(string $title, string $description, string $status, string $date, string $time) {
      $this->title = $title;
      $this->description = $description;
      $this->status = $status;
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