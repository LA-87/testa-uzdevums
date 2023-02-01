<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Services\TaxService;
use Tests\TestCase;

class TexCalculateTest extends TestCase
{
    /**
     * @group tax
     */
    public function test_calculates_tax(): void
    {
        $product = Product::factory()->create();

        $calculatedPriceWithTax = TaxService::totalPriceWithTax($product);
        $expectedPriceWithTax = $product->price * $product->count *  (1 + config('tax.VAT'));

        $this->assertLessThan(PHP_FLOAT_EPSILON, $calculatedPriceWithTax - $expectedPriceWithTax);
    }
}
