<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        Store::factory(100)->create();

        // for ($i = 1; $i <= 100; $i++) {
        //     $store = new Store();
        //     $store->name = 'Loja '.$i;
        //     $store->description = 'Descricao da loja '.$i;
        //     $store->phone = '(85) 9 1234-1231';
        //     $store->address = 'Rua das Amelias, N '.$i;
        //     $store->photo = 'https://diariodonordeste.verdesmares.com.br/image/contentid/policy:7.5037907:1721235579/Jarr-o7.jpeg';

        //     $store->save();
        // }
    }
}
