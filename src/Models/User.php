<?php

namespace App\Models;

use App\Repositores\MySqlRepositores\MySqlConection;
use PDOException;

class User {
    private $database;
    private string $table = "solicitud";
    
    public function __construct(
        private string $name,
        private string $topic = "",
        private string $description = "",
        private ?int $id = 0,
        private ?string $date = "",
        

    )
    {
        if(!$this->database){
            $this->database = new MySqlConection;
        }
        
    }
    public function getName()
    {
        return $this->name;
    }
    public function getTopic()
    {
        return $this->topic;
    }
    public function getDescription()
    {
        return $this->description;
    }
     public function getCreateDate()
    {
        return $this->date;
    } 
/*     static function getOne()
    {
        return new self("Marta");
    } */
    static function getAll()
    {
        
    }
    static function all() : array
    {
        $sql = "SELECT * FROM solicitud";
        $database = new MySqlConection;
        $query = $database->mysql->query($sql);
        $userRow = $query->fetchAll();
        $userList = [];

        foreach ($userRow as $user) {
            $obj = new self($user['name'],$user['topic'],$user['description'],$user['id'],$user['date']);
            array_push($userList,$obj);

        }


        return $userList;
    }

    public function save() : void
    {
        try{
            $sql = "INSERT INTO {$this->table} (name,topic,description) VALUES ('{$this->getName()}','{$this->getTopic()}','{$this->getDescription()}')";
            $this->database->mysql->query($sql);
            
         
           
            
            
            } catch(PDOException $ex){
            echo "Error" . $ex->getMessage();
            die();
            }
    }

    // static function findById($id) : array
    // {
    //     try {
    //         $sql = "SELECT * FROM solicitud WHERE id = {$id}";
    //         $database = new MySqlConection;
    //         $query = $database->mysql->query($sql);
    //         $userRow = $query->fetchAll();

    //         $user = new self($userRow[0]['name']);
    //         $list = [$user];
    //         return $list;

    //     }catch(PDOException $ex){
    //         echo "Error" . $ex->getMessage();
    //         die();
    //         }
    // }
}