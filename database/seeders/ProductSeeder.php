<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;



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
            $newProduct->image_link = $product['image_link'];
            $newProduct->save();
        }
    }
}
