<?php

namespace Tests\Feature;

use App\Models\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class StoreControllerApiTest extends TestCase
{
    
    public function testEndpointGetListStoresSuccessfully(): void
    {
        $response = $this->get('/api/lanchonetes');

        $json = json_decode(
            $response->getContent()
        );

    
        $response->assertStatus(200);
        $this->assertIsArray($json->data);
        $this->assertIsObject($json->data[0]);
        $this->assertEquals('Sr. Allan Fernandes Galvão Sobrinho', $json->data[0]->name);
    }

    public function testEndpointGetOneStoreSuccessfully(): void
    {
        $store = new Store();
        $store->fill([
            'name' => 'Centauro',
            'description' => 'Loja de sapatos e tenis',
            'address' => 'Av. Domingos Limpo',
            'phone' => '85 9 1234-1234',
            'photo' => 'imagem.jpg',
        ]);
        $store->save();

        $response = $this->get('/api/lanchonetes/'.$store->id);

        $json = json_decode(
            $response->getContent()
        );
    
        $response->assertStatus(200);
        $this->assertIsObject($json);
        $this->assertEquals('Centauro', $json->name);
        $this->assertEquals('imagem.jpg', $json->photo);
    }


    public function testEndpointGetOneStoreThatNotExistsShouldBeANotFoundResponse(): void
    {
        $response = $this->get('/api/lanchonetes/8723487242');
    
        $response->assertStatus(404);
    }
}
