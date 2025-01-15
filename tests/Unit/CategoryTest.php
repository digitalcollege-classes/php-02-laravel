<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAttributesIsStrings(): void
    {
        $category = new Category();
        $category->name = 'Category 1';
        $category->description = 'Description of category 1';
        $category->image = 'image.jpg';

        $this->assertEquals('Category 1', $category->name);
        $this->assertEquals('Description of category 1', $category->description);
        $this->assertEquals('image.jpg', $category->image);
    }

    public function testAttributesAreCorrectlyHandled(): void
    {
        $category = new Category();
        $category->name = '   Category 1   ';
        $category->description = ' Description of category 1';
        $category->image = ' image.jpg       ';

        $this->assertEquals('Category 1', $category->name);
        $this->assertEquals('Description of category 1', $category->description);
        $this->assertEquals('image.jpg', $category->image);
    }

    public function testValidImageFileExtension(): void
    {
        $category = new Category();
        $category->image = 'image.jpg';

        $this->assertStringEndsWith('.jpg',$category->image);
    }
}
