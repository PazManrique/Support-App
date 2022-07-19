<?php

namespace App\Controllers;

use App\Core\View;

class Controller {
    
    public function __construct()
    {
       
if(isset($_GET["action"])&&$_GET["action"]==="newRequestView"){
    $this->newRequestView();
    return;
}


        $this->index();
    }

    public function index()
    {
        /* $data = [
            "name" => "giacomo",
        ]; */

        return new View('home');
    }

    public function newRequestView()
   
    {
        return new View('newRequestView');
    }

 
}