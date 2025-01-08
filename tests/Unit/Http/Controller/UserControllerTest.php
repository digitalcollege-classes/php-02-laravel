<?php

declare (strict_types=1);

namespace Tests\Unit\Http\Controller;

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
