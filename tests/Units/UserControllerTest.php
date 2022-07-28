<?php

namespace Tests\Units;

use App\Controllers\UserController;
use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Framework\TestCase;

use function PHPSTORM_META\type;

class UserControllerTest extends TestCase
{
    public function test_function_index_return_view_home()
    {
        $controller = new UserController;
        
        $view = $controller->index();

        $this->assertIsObject($view);
        $this->assertEquals('home', $view->getView());
    }

       public function test_function_newRequestView_return_view_newRequestView()
    {
        $controller = new UserController;
        
        $view = $controller->newRequestView();

        $this->assertIsObject($view);
        $this->assertEquals('newRequestView', $view->getView());
    }

    public function test_function_successMessageView_return_view_successMessageView()
{
    $controller = new UserController;
    $view = $controller->successMessageView();

    $this->assertIsObject($view);
    $this->assertEquals('successMessageView', $view->getView());

}



}