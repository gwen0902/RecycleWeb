<?php

namespace Database\Seeders;

use App\Models\Waste;
use App\Models\WasteCategory;
use Illuminate\Database\Seeder;

class WasteSeeder extends Seeder
{
    public function run()
    {
        $plastik = WasteCategory::where('name', 'Plastik')->first();
        $kertas = WasteCategory::where('name', 'Kertas')->first();
        $besi = WasteCategory::where('name', 'Besi')->first();
        $kaca = WasteCategory::where('name', 'Kaca')->first();
        $elektronik = WasteCategory::where('name', 'Elektronik')->first();

        Waste::insert([
            // Plastik
            [
                'waste_category_id' => $plastik->id,
                'name' => 'Botol Plastik',
                'price' => 1000,
                'unit' => 'kg',
                'image' => 'botol-plastik.png'
            ],
            [
                'waste_category_id' => $plastik->id,
                'name' => 'Kantong Plastik',
                'price' => 800,
                'unit' => 'kg',
                'image' => 'kantong-plastik.png'
            ],
            // Kertas
            [
                'waste_category_id' => $kertas->id,
                'name' => 'Kardus',
                'price' => 1200,
                'unit' => 'kg',
                'image' => 'kardus.png'
            ],
            [
                'waste_category_id' => $kertas->id,
                'name' => 'Koran',
                'price' => 1000,
                'unit' => 'kg',
                'image' => 'koran.png'
            ],
            // Besi
            [
                'waste_category_id' => $besi->id,
                'name' => 'Kaleng',
                'price' => 1500,
                'unit' => 'kg',
                'image' => 'kaleng.png'
            ],
            [
                'waste_category_id' => $besi->id,
                'name' => 'Besi Bekas',
                'price' => 2000,
                'unit' => 'kg',
                'image' => 'besi-bekas.png'
            ],
            // Kaca
            [
                'waste_category_id' => $kaca->id,
                'name' => 'Botol Kaca',
                'price' => 900,
                'unit' => 'kg',
                'image' => 'botol-kaca.png'
            ],
            [
                'waste_category_id' => $kaca->id,
                'name' => 'Kaca Pecah',
                'price' => 700,
                'unit' => 'kg',
                'image' => 'kaca-pecah.png'
            ],
            // Elektronik
            [
                'waste_category_id' => $elektronik->id,
                'name' => 'Handphone Bekas',
                'price' => 5000,
                'unit' => 'unit',
                'image' => 'hp-bekas.png'
            ],
            [
                'waste_category_id' => $elektronik->id,
                'name' => 'Kabel Bekas',
                'price' => 2500,
                'unit' => 'kg',
                'image' => 'kabel-bekas.png'
            ],
        ]);
    }
}