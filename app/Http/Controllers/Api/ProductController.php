<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Textures;
use App\Models\Categories;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
   public function index(){
        $products = Product::with('texture','category', 'brand')->paginate(9);
            return response()->json([
                'success' => true,
                'results' => $products
            ]);
        }
        public function show($id){
            $products = Product::with('texture','category', 'brand')->where('id', $id)->first();
            if($products){
                return response()->json([
                    'success' => true,
                    'results' => $products
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'results' => 'Nessun prodotto trovato'
                ]);
            }
    }
   
    // public function properties(){
    //     $types = Textures::all();
    //     $categories = Categories::all();
    //     $brands = Brand::all();
    //     // $tags = Tag::all();

    //     return response()->json([
    //         'success' => true,
    //         'types' => $types,
    //         'categories' => $categories,
    //         'brands' => $brands,
    //         // 'tags' => $tags,
    //     ]);
    // }   

}
