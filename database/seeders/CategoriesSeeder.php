<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config('dataseeder.categories');
        //dd($brands);
        foreach ($categories as $category) {
            $newCategory = new Categories();
            $newCategory->name = $category;
            $newCategory->slug = str::slug($category, '-');
            $newCategory->save();
        }
    }
}
