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
        $textures = Textures::all();
        return view('admin.textures.index', compact('textures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Textures  $textures
     * @return \Illuminate\Http\Response
     */
    public function show(Textures $textures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textures  $textures
     * @return \Illuminate\Http\Response
     */
    public function edit(Textures $textures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Textures  $textures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Textures $textures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Textures  $textures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textures $textures)
    {
        //
    }
}
