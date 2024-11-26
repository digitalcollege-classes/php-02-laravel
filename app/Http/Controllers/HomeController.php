<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $nome = 'Chiquim das Rapaduras';

        return view('home/index', [
            'nome' => $nome,
        ]);
    }
}