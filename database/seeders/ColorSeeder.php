<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = config('dataseeder.colors');
        foreach ($colors as $color) {
            $newColor = new Color();
            $newColor->name = $color['colour_name'];
            $newColor->slug = Str::slug($color['colour_name'], '-');
            $newColor->hex_value = $color['hex_value'];
            $newColor->save();
        }
    }
}
