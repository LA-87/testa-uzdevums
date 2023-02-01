<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $computerParts = [
            ['name' => 'Motherboard'],
            ['name' => 'Processor'],
            ['name' => 'Graphics Card'],
            ['name' => 'Memory (RAM)'],
            ['name' => 'Storage (SSD)'],
            ['name' => 'Storage (HDD)'],
            ['name' => 'Power Supply'],
            ['name' => 'Case'],
            ['name' => 'Cooling Fan'],
            ['name' => 'Optical Drive']
        ];

        collect($computerParts)->each(
            fn($part) => Product::factory()->create($part)
        );
    }
}
