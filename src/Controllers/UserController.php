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
if(isset($_GET["action"]) && $_GET["action"]==="whatDoYouWantToDo"){
    $this -> whatDoYouWantToDo();
    return;
}
if(isset($_GET["action"]) && $_GET["action"]==="editionView"){
    $this -> editionView('name');
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
   
    public function index(): View
    {
        $data = User::all();
/* 
        $marta = User::_getOne();
         $data = [
            $marta,
        ];  */

        return new View('home', $data);
    }


    public function newRequestView(): View
   
    {
        return new View("newRequestView");
    }
    
    public function whatDoYouWantToDo() : View
   
    {
        return new View("whatDoYouWantToDo");
    }

    // public function editionView(string $id) : View
    // {
    //     User::findById($id);
    //     $data = [];
    //     return new View ('editionView', $data);
    // }

    public function successMessageView() : View
    {
        return new View ('successMessageView');
    }

    public function editionView() : View
    {
        return new View ('editionView');
    }

    public function store()
   
    {
       $userName = $_POST['name']; 
       $userTopic = $_POST['topic'];
       $userDescription = $_POST['description'];
       $user = new User($userName, $userTopic,$userDescription);
       $user->save();
       $this -> successMessageView();
       
    }



 
}