<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private Product $product;
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->product = new Product();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $product = $this->product->index();
        //dd($product);
        $this->assertTrue(true);
    }
}