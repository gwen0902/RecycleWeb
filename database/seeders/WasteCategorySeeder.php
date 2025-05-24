<?php
namespace Database\Seeders;

use App\Models\WasteCategory;
use Illuminate\Database\Seeder;

class WasteCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
    ['name' => 'Plastik', 'image' => 'plastik.png'],
    ['name' => 'Kertas', 'image' => 'kertas.png'],
    ['name' => 'Besi', 'image' => 'besi.png'],
    ['name' => 'Kaca', 'image' => 'kaca.png'],
    ['name' => 'Elektronik', 'image' => 'elektronik.png'],
];

foreach ($categories as $cat) {
    WasteCategory::create([
        'name' => $cat['name'],
        'image' => $cat['image'],
    ]);
}
    }
}
?>