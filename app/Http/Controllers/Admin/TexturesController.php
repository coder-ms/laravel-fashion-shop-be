<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Textures;
use Illuminate\Http\Request;

class TexturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $textures = Textures::paginate(5);
        return view('admin.textures.index', compact('textures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('admin.textures.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newTexture = new textures();
        $newTexture->name = $data['name'];

        $newTexture = textures::create($data);
        return redirect()->route('admin.textures.show', $newTexture->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Textures  $textures
     *
     */
    public function show(Textures $texture)
    {
        return view('admin.textures.show', compact('texture'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textures  $textures
     * @
     */
    public function edit(Textures $texture)
    {
        return view('admin.textures.edit', compact('texture'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Textures  $textures
     *
     */
    public function update(Request $request, Textures $texture)
    {
        $data = $request->all();

        $texture->update($data);

        return redirect()->route('admin.textures.index')->with('message', "$texture->name updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Textures  $textures
     *
     */
    public function destroy(Textures $texture)
    {
        $texture->delete();
        return redirect()->route('admin.textures.index')->with('message', "$texture->name deleted successfully");

    }
}
