<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Drink;

class DrinkModelUnitTest extends TestCase
{
    public function testIfNameAttributeIsAString(): void
    {
        $drink = new Drink();
        $drink->name = 'Mojito';
        $drink->type = 'cachaca';
        $drink->price = 19.90;

        $this->assertIsString($drink->name);
        $this->assertEquals('Mojito', $drink->name);
        $this->assertEquals('cachaca', $drink->type);

        $this->assertEquals(19.90, $drink->price);
    }
}