<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class StoreFactory extends Factory
{
    public function definition(): array
    {
        // Store::factory(10)->create();
        return [
            'name' => fake('pt_BR')->name(),
            'description' => fake('pt_BR')->sentence(),
            'photo' => 'https://diariodonordeste.verdesmares.com.br/image/contentid/policy:7.5037907:1721235579/Jarr-o7.jpeg',
            'phone' => fake()->numerify('###########'),
            'address' => fake('pt_BR')->address(),
        ];
    }
}


