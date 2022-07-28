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


if(isset($_GET["action"]) && $_GET["action"]==="home"){
    $this -> home();
    return;
    
}
if(isset($_GET["action"]) && $_GET["action"]==="newRequestView"){
    $this -> newRequestView();
    return;
} 
if(isset($_GET["action"]) && $_GET["action"]==="store"){
    $this -> store();
    return;
}
if(isset($_GET["action"]) && $_GET["action"]==="delete"){
   $id = $_GET['id'];
   $this->destroy($id);
    return;
}

 if(isset($_GET["action"]) && $_GET["action"]==="whatDoYouWantToDo"){
    $id = $_GET['id'];
    $this->whatDoYouWantToDo($id);
    return;
} 
if(isset($_GET["action"]) && $_GET["action"]==="editionView"){
    $id = $_GET['id'];
    $this->editionView($id);
    return;
}  
$this->index();


if(isset($_GET["action"])&&$_GET["action"]==="home")        
$this->index(); 




    }
   
    public function index(): View
    {
        $data = User::all();
        return new View('home', $data);
       
    }


    public function newRequestView()
   
    {
        return new View("newRequestView");
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
 
    public function editionView(int $id) : View
    {
        $user = User::findById($id);
        $data = [$user];
        return new View('editionView', $data);
    }  
    public function home() : void
   
    {
        $this->index();
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

    public function destroy(int $id) : void
    {
       User::delete($id);
       $this->index(); 
    }

       public function whatDoYouWantToDo(int $id) : View
   
    {
        
        $user = User::findById($id);
        $data = [$user];
        return new View('whatDoYouWantToDo', $data);
        
        
    }  
 



 
}