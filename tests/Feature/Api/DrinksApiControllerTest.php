<?php

declare(strict_types=1);

namespace Tests\Feature\Api;

use Tests\TestCase;
use Symfony\Component\HttpFoundation\Response;

class DrinksApiControllerTest extends TestCase
{
    private const BASE_URL = '/api/drinks';

    public function testTheEndpointRetrieveAListOfDrinks(): void
    {
        $response = $this->get(self::BASE_URL);

        $content = $response->json();

        $response->assertStatus(Response::HTTP_OK);

        $this->assertIsArray($content);
        $this->assertEquals(
            [
                ['id' => 1, 'name' => 'Ypióca', 'type' => 'Cachaça'],
                ['id' => 2, 'name' => 'Havana Club', 'type' => 'Rum']
            ],
            $content
        );
    }

    public function testTheEndpointRetrieveOneDrink(): void
    {
        $response = $this->get(self::BASE_URL . '/1');

        $content = $response->json();

        $response->assertStatus(Response::HTTP_OK);

        $this->assertEquals('Ypióca', $content->name);
        $this->assertEquals('Cachaça', $content->type);
    }

    public function testTheEndpointCreatesANewDrink(): void
    {
        $response = $this->post(self::BASE_URL, [
            'name' => 'Ypióca 3000',
            'type' => 'Cachaça Fraca'
        ]);

        $content = $response->json();

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertIsArray($content);
        $this->assertEquals(
            ['id' => 3, 'name' => 'Ypióca 3000', 'type' => 'Cachaça Fraca'],
            $content
        );

        $this->assertDatabaseHas('drinks', [
            'id' => 3,
            'name' => 'Ypióca 3000',
            'type' => 'Cachaça Fraca'
        ]);
    }

    public function testTheEndpointUpdatesANewDrink(): void
    {
        $response = $this->patch(self::BASE_URL . '3', [
            'name' => 'Ypióca 4000',
            'type' => 'Cachaça Fraquinha'
        ]);

        $content = $response->json();

        $response->assertStatus(Response::HTTP_CREATED);

        $this->assertEquals(
            ['id' => 3, 'name' => 'Ypióca 4000', 'type' => 'Cachaça Fraquinha'],
            $content
        );

        $this->assertDatabaseHas('drinks', [
            'id' => 3,
            'name' => 'Ypióca 4000',
            'type' => 'Cachaça Fraquinha'
        ]);
    }

    public function testTheEndpointDeletesADrink(): void
    {
        $response = $this->delete(self::BASE_URL . '3');

        $response->assertStatus(Response::HTTP_NO_CONTENT);
    }

    public function testTheEndpointDeleteNotFoundError(): void
    {
        $response = $this->get(self::BASE_URL . '/999');

        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }
}