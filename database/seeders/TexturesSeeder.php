<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Textures;

class TexturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $textures = config('dataseeder.textures');
        //dd($brands);
        foreach ($textures as $texture) {
            $newTexture = new Textures();
            $newTexture->name = $texture;
            $newTexture->save();
        }
    }
}
