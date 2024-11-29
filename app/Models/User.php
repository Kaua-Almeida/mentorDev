<?php 

namespace App\Models;

class User 
{
    private int $id;
    private string $userName;
    private string $password;
    private string $function;

    public function __construct(string $userName, string $password)
    {
        $this->userName = $userName; 
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getUserName():string
    {
       return $this->userName;
    }
    public function getPassword():string
    {
        return $this->password;
    }
    public function getFunction()
    {

    }


}

?>