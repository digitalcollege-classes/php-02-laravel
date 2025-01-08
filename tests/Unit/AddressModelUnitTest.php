<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Address;

class AddressModelUnitTest extends TestCase
{
    public function testIfNameAttributeIsAString(): void
    {
        $address = new Address();
        $address->street = 'Rua Estado do Rio';
        $address->number = 55;
        $address->city = 'Fortaleza';
        $address->state = 'Ceará';
        $address->postalCode = '60440782';

        $this->assertEquals('Rua Estado do Rio', $address->street);
        $this->assertEquals(55, $address->number);
        $this->assertEquals('Fortaleza', $address->city);
        $this->assertEquals('Ceará', $address->state);
        $this->assertEquals('60440782', $address->postalCode);
    }
}
