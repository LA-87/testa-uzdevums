<?php

namespace App\Models;

use App\Services\TaxService;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['name', 'count', 'price'];
    protected $appends = ['total_price_with_tax'];

    public function totalPriceWithTax(): Attribute
    {
        return Attribute::make(
            get: fn() => TaxService::totalPriceWithTax($this)
        );
    }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable();
    }
}
