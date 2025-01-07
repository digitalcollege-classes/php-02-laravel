<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Adress;

class AdressModelUnitTest extends TestCase
{
    public function testIfNameAttributeIsAString(): void
    {
        $adress = new Adress();
        $adress->street = 'Rua Estado do Rio';
        $adress->number = 55;
        $adress->city = 'Fortaleza';
        $adress->state = 'Ceará';
        $adress->postalCode = '60440782';

        $this->assertEquals('Rua Estado do Rio', $adress->street);
        $this->assertEquals(55, $adress->number);
        $this->assertEquals('Fortaleza', $adress->city);
        $this->assertEquals('Ceará', $adress->state);
        $this->assertEquals('60440782', $adress->postalCode);
    }
}
