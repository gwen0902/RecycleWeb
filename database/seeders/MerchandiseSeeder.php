<?php

namespace Database\Seeders;

use App\Models\Merchandise;
use Illuminate\Database\Seeder;
class MerchandiseSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['name' => 'Tote Bag Daur Ulang', 'image' => 'totebag.png', 'price' => 50000],
            ['name' => 'Tumbler Eco', 'image' => 'tumbler.png', 'price' => 75000],
            ['name' => 'Kaos Recycle', 'image' => 'kaos.png', 'price' => 100000],
        ];
        foreach ($items as $item) {
            Merchandise::create($item);
        }
    }
}
