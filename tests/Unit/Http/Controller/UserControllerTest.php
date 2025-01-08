<?php

namespace Tests\Unit\Http\Controllers;
use Tests\TestCase;

class UserControllerTest extends TestCase 
{
    public function testMeuPrimeiroTeste(): void 
    {
        $userController = new UserController;
        $resultado = $userController->save();

        $this->assertTrue($result["message"] === "Usuaário Criado com sucesso");
        // $this->assertTrue(condition: true);
    }
}