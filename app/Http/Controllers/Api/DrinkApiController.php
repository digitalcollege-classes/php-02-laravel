<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Drink;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpStatus;

class DrinkApiController extends Controller
{
    public function getList(): Response
    {
        return new Response(
            Drink::all(),
            HttpStatus::HTTP_OK
        );
    }

    public function getOne(string $id): Response
    {
        return new Response(
            Drink::findOrFail($id),
            HttpStatus::HTTP_OK
        );
    }

    public function create(Request $request)
    {
        return new Response(
            Drink::firstOrCreate($request->toArray()),
            HttpStatus::HTTP_CREATED
        );
    }

    public function update(string $id, Request $request)
    {
        $drink = Drink::findOrFail($id);

        $drink->update($request->toArray());

        return new Response($drink, HttpStatus::HTTP_OK);
    }

    public function remove(string $id)
    {
        $drink = Drink::findOrFail($id);

        if ($drink->delete())
            return new Response(status: HttpStatus::HTTP_NO_CONTENT);

        return new Response(status: HttpStatus::HTTP_NOT_FOUND);
    }
}