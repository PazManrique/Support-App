<?php

namespace App\Repositores\MySqlRepositores;

use PDO;
use PDOException;

class MySqlConection {
    private string $localhost = "localhost";
    private string $db_name  = "solicitudes";
    private string $username = "root";
    private string $password = "";

    public $mysql;

public function __construct()
{
    try{
    $this->mysql = $this->getConection();
    var_dump($this->mysql);
    } catch(PDOException $ex){
    echo "esto es un error en db" . $ex->getMessage();
    die();
    }

}
public function getConection()
{
    $charset = "utf 8";
    $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $dns = "mysql:host={$this->localhost};dbname={$this->db_name};$charset";
    $pdo = new PDO($dns,$this->username,$this->password,$options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}


}