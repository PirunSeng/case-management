<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    // tests must be prefixed by test_ or Laravel will consider it is a simple function, not a test to run.

    public function test_product_info()
    {
        $product = new Product;
        $product->name = 'Name';
        $product->detail = 'Detail';
        $result = $product->product_info();
        $expected = 'Name Detail';
        $this->assertSame($expected, $result);
    }
}
