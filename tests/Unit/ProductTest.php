<?php

declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    
    public function testIfAProductHasValidAttributes(): void
    {
        
        $product = new Product();
            $product->name = 'Pizza';
            $product->type = 'Food';
            $product->description = 'Delicious cheese pizza';
            $product->price = 15.99;
            $product->quantity = 10;
            $product->images = 'marguerita.png';
            $product->status = 'Disponível';
            

        $this->assertEquals('Pizza', $product->name);
        $this->assertEquals('Food', $product->type);
        $this->assertEquals('Delicious cheese pizza', $product->description);
        $this->assertEquals(15.99, $product->price);
        $this->assertEquals(10, $product->quantity);
        $this->assertEquals('marguerita.png', $product->images);
        $this->assertEquals('Disponível', $product->status);
    }


}




   
