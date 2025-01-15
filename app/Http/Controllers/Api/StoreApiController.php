<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;       
use Illuminate\Http\Response;
use App\Models\Store;

class StoreApiController extends Controller
{
    public function getList(): Response
    {
        $data = Store::paginate(10);
        //SELECT * .... LIMIT 10, 1;

        return new Response($data);
    }

    public function getOne(string $id): Response
    {
        $store = Store::find($id);

        if ($store === null) {
            return new Response(status: 404);
        }

        return new Response($store);
    }

    public function create()
    {

    }

    public function remove()
    {
    }        

    public function update(string $id)
    {
        
    }
}