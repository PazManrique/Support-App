<?php

namespace App\Models;

use App\Repositores\MySqlRepositores\MySqlConection;
use PDOException;

class User {
    private $database;
    private string $table = "solicitud";
    
    public function __construct(
        private string $name,
        private ?int $id = 0,
        private ?string $date = "",
        private ?string $topic = "",

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
    public function getCreateDate()
    {
        return $this->date;
    }
    public function getCreateQueryTopic()
    {
        return $this->topic;
    }
    // static function getOne()
    // {
    //     return new self("Marta");
    // }
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
            $obj = new self($user['name'],$user['id'],$user['date'],$user['topic']);
            array_push($userList,$obj);

        }


        return $userList;
    }
    public function save() : void
    {
        try{
            $sql = "INSERT INTO {$this->table} (name, topic) VALUES ('{$this->getName()}','{$this->getCreateQueryTopic()}')";
            $this->database->mysql->query($sql);
            } catch(PDOException $ex){
            echo "error" . $ex->getMessage();
            die();
            }


     
    }

}