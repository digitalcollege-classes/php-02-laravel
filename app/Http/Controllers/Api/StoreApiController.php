<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller        

use Illuminate\Http\Response;

class StoreApiController extends Controller
{
    public function getList(): Response
    {

        return new Response([
            ['id' => 1, 'name' => 'Acai da Val'],
            ['id' => 2, 'name' => 'Pastel e Cia'],
        ]);
    }

    public function getOne(string $id): Response
    {
        return new Response([
            'id' => $id,
            'name' => 'TEste',
        ]);
    }

    public function create()
    {

    }

    public function remove()
    {
        

    public function update(string $id)
    {
        
    }
}