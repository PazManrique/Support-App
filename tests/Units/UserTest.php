<?php

namespace Tests\Units;

use App\Models\User;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\stringContains;

Class UserTest extends TestCase
{

public function test_function_getName_return_a_string()
{
    $User = new User("");

        $name = $User->getName();

        $this->assertIsString ($name);
       
    
}
}