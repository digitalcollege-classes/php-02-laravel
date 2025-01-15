<?php 

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Order;

class OrderModelUnitTest  extends TestCase
{
    public function testIfNameAttributeIsAString(): void 
    {
        $order =  new Order();
        $order->price = "19.90";
        $order->type_pagament = "Dinheiro";
        $order->address = "Paupina Fortaleza-Ce";
        $order->status = "Cozinhando";
        $order->datetime = "2025-01-07 14:30:00.000000";

        $this->assertIsString($order->price);
        $this->assertIsString($order->type_pagament);
        $this->assertIsString($order->address);
        $this->assertIsString($order->status);
        $this->assertIsString($order->datetime);




    }
}