<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kit;
use Illuminate\Support\Str;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kits = [
            [
                'name' => 'Soldering Iron',
                'description' => 'A basic soldering iron for electronics work.',
                'price_cents' => 2499,
                'stock' => 10,
            ],
            [
                'name' => 'Breadboard Starter Kit',
                'description' => 'Everything you need to prototype circuits.',
                'price_cents' => 1999,
                'stock' => 25,
            ],
            [
                'name' => 'Multimeter',
                'description' => 'Digital multimeter for measuring voltage and current.',
                'price_cents' => 2999,
                'stock' => 15,
            ],
        ];

        foreach ($kits as $kit) {
            Kit::create([
                'name' => $kit['name'],
                'slug' => Str::slug($kit['name']),
                'description' => $kit['description'],
                'price_cents' => $kit['price_cents'],
                'stock' => $kit['stock'],
                'is_active' => true,
                'is_deprecated' => false,
            ]);
        }
    }
}
