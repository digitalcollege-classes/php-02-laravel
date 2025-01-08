<?php

namespace App\Http\Controllers;

class UserController 
{
    public function save(array $userData = []): array {
        return [
            "message" => "Usuário criado com sucesso!"
        ];
    }
}