<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(): mixed
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'id' => $i,
                'name' => 'Padaria '.$i,
                'city' => 'Fortaleza-CE',
                'status' => $i % 2 === 0,
                'site' => 'https://padaria.com.br',
                'expired_date' => '21/12/2024'
            ];
        }

        return view('home/index', [
            'stores' => $data,
        ]);
    }

    public function add(): mixed
    {
        return view('home/add');
    }
}