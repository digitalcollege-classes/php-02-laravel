<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_customer_with_valid_data()
    {
        // Dados de exemplo
        $data = [
            'nome' => 'Maria Silva',
            'email' => 'mary.silva@example.com',
            'telefone' => '(11) 98765-4321',
            'endereco' => 'Rua Exemplo, 123, São Paulo, SP',
            'status' => true,
        ];

        // Cria um cliente no banco de dados
        $customer = Customer::create($data);

        // Verifica se o cliente foi criado corretamente
        $this->assertDatabaseHas('customers', $data);
    }

    /** @test */
    public function it_fails_when_invalid_data_is_provided()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        // Tenta criar um cliente com dados inválidos
        Customer::create([
            'nome' => null, // Nome inválido
            'email' => 'invalid-email', // Email inválido
            'telefone' => 123456789, // Telefone inválido
            'endereco' => 123, // Endereço inválido
            'status' => 'not-boolean', // Status inválido
        ]);
    }

    /** @test */
    public function it_verifies_data_types_of_customer_model()
    {
        // Cria um cliente
        $customer = Customer::factory()->create([
            'nome' => 'Teste Cliente',
            'email' => 'teste@cliente.com',
            'telefone' => '1234567890',
            'endereco' => 'Endereço Exemplo',
            'status' => true,
        ]);

        // Verifica os tipos dos dados
        $this->assertIsInt($customer->id);
        $this->assertIsString($customer->nome);
        $this->assertIsString($customer->email);
        $this->assertIsString($customer->telefone);
        $this->assertIsString($customer->endereco);
        $this->assertIsBool($customer->status);
    }
}
