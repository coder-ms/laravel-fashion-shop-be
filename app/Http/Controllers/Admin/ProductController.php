<?php

namespace App\Http\Controllers\Admin;

use app\Http\Controllers\Admin;
use App\Models\Categories;
use App\Models\Textures;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        // $product->brand_name = "Not found";
        // $brand = Brand::all();
        // for ($i = 0; $i < count($brand); $i++) {
        //     if ($brand[$i]->id == $product->brand_id) {
        //         $product->brand_name = $brand[$i]->name;
        //         break;
        //     }
        // }
   
        
        $products = Product::paginate(4);
  
        return view('admin.products.index', compact('products'));
        // Se Utente(0 su is_Admin -> database), visualizziamo solo i propri post

    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(Product $product)
    {
        $textures = Textures::all();
        $brands = Brand::all();
        $categories = Categories::all();
        return view('admin.products.create', compact('product','textures','brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $img_path = Storage::put('uploads', $data['image_link']);
        /*  $slug = Product::generateSlug($request->name);
        $data['slug'] = $slug; */
        if($request->hasFile('image_link')){
            $path = Storage::put('image_link', $request->image_link);
            $data['image_link'] = $path;
        }

        $newProduct = new Product();
        $newProduct->name = $data['name'];
        $newProduct->price = $data['price'];
        $newProduct->description = $data['description'];
        $newProduct->image_link = $data['image_link'];

        $newProduct = Product::create($data);
        return redirect()->route('admin.products.show', $newProduct->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * 
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if ($request->hasFile('image_link')) {
            if ($product->image_link) {
                Storage::delete($product->image_link);
            }
            $path = Storage::put('image_link', $request->image_link);
            $data['image_link'] = $path;
        }

        // $slug = Product::generateSlug($request->name);
        // $data['slug'] = $slug;
        $product->update($data);

        return redirect()->route('admin.products.index')->with('message', "$product->name updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('message', "$product->name deleted successfully");
    }
}
