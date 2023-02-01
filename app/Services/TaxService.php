<?php

namespace App\Services;

use App\Models\Product;

class TaxService
{
    public static function totalPriceWithTax(Product $product): float
    {
        return static::addTax($product->price * $product->count);
    }

    public static function addTax(float $value): float
    {
        return round($value + $value * config('tax.VAT'), 2);
    }

    public static function subtractTax(float $value): float
    {
        return round($value / (1 + config('tax.VAT')),2);
    }
}
