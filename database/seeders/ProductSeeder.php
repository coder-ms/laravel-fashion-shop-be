<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('dataseeder.products');
        //dd($products);
        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->name = $product['name'];
            //$newProduct->slug = $product['slug'];
            $newProduct->price = $product['price'];
            $newProduct->description = $product['description'];
            //$newProduct->n_product = $product['n_product'];
            $newProduct->image_link = ProductSeeder::storeimage($product['api_featured_image']);
            $newProduct->category_id = $product['category_id'];
            $newProduct->texture_id = $product['texture_id'];
            $newProduct->brand_id = $product['brand_id'];
          
            $newProduct->save();
        }
    }
    public static function storeimage($img)
    {
        $url = 'https:' . $img;
        $contents = file_get_contents($url);
        $temp_name = substr($url, strrpos($url, '/') + 1);
        $name = substr($temp_name, 0, strpos($temp_name, '?')) . '.jpg';
        $path = 'image_link/' . $name;
        Storage::put('image_link/' . $name, $contents);
        return $path;
    }
}