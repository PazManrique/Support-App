<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\User;

class UserController {
    
    public function __construct()
    {
       
if(isset($_GET["action"]) && $_GET["action"]==="newRequestView"){
    $this -> newRequestView();
    return;
}
if(isset($_GET["action"]) && $_GET["action"]==="store"){
    $this -> store();
    return;
}
$this->index();


if(isset($_GET["action"])&&$_GET["action"]==="home")        
$this->index();
    }
   
    public function index()
    {
        $data = User::all();
/* 
        $marta = User::_getOne();
         $data = [
            $marta,
        ];  */

        return new View('home', $data);
    }


    public function newRequestView()
   
    {
        return new View("newRequestView");
    }
    
    public function store()
   
    {
       $userName = $_POST['name']; 
       $userTopic = $_POST['topic'];
       $userDescription = $_POST['description'];
       $user = new User($userName, $userTopic,$userDescription);
       $user->save();
       
    }



 
}