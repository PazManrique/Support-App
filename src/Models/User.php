<?php

namespace App\Models;

use App\Repositores\MySqlRepositores\MySqlConection;
use PDOException;

class User
{
    private $database;
    private string $table = "solicitud";

    public function __construct(
        private string $name,
        private string $topic = "",
        private string $description = "",
        private ?int $id = 0,
        private ?string $date = "",


    ) {
        if (!$this->database) {
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
    public function getId()
    {
        return $this->id;
    }
    public function getCreateDate()
    {
        return $this->date;
    }

    /*     static function getOne()
    {
        return new self("Marta");
    } */
    /*     static function getAll()
    {
        
    } */
    static function all(): array
    {
        $sql = "SELECT * FROM solicitud";
        $database = new MySqlConection;
        $query = $database->mysql->query($sql);
        $userRow = $query->fetchAll();
        $userList = [];

        foreach ($userRow as $user) {
            $obj = new self($user['name'], $user['topic'], $user['description'], $user['id'], $user['date']);
            array_push($userList, $obj);
        }


        return $userList;
    }

    public function save(): void
    {
        try {
            $sql = "INSERT INTO {$this->table} (name,topic,description) VALUES ('{$this->getName()}','{$this->getTopic()}','{$this->getDescription()}')";
            $this->database->mysql->query($sql);
        } catch (PDOException $ex) {
            echo "Error" . $ex->getMessage();
            die();
        }
    }
    static function delete(int $id): void
    {
        try {
            $sql = "DELETE  FROM solicitud WHERE id = {$id}";
            $database = new MySqlConection;
            $database->mysql->query($sql);
        } catch (PDOException $ex) {
            echo "Error" . $ex->getMessage();
            die();
        }
    }

    static function findById($id): object
    {
        try {
            $sql = "SELECT * FROM solicitud WHERE id = {$id}";
            $database = new MySqlConection;
            $query = $database->mysql->query($sql);
            $userRow = $query->fetchAll();

            $user = new self($userRow[0]['name'], $userRow[0]['topic'], $userRow[0]['description'], $userRow[0]['id'], $userRow[0]['date']);
            /*   $list = [$user]; */
            return $user;
        } catch (PDOException $ex) {
            echo "Error" . $ex->getMessage();
            die();
        }
    }
    static function update(int $id, string $data, string $newtopic, string $newdescription): void
    {
        try {
            $sql = "UPDATE solicitud SET  name = '{$data}', topic = '{$newtopic}', description = '{$newdescription}'  
             WHERE id = {$id}";
            $database = new MySqlConection;
            $database->mysql->query($sql);
        } catch (PDOException $ex) {
            echo "Error" . $ex->getMessage();
            die();
        }
    }
}
