<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shipping;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $shippings = Shipping::paginate(4);
        return view('admin.shippings.index', compact('shippings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('admin.shippings.create');

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

        $newShipping = new Shipping();
        $newShipping->telephone = $data['telephone'];
        $newShipping->email = $data['email'];
        $newShipping->code_shipping = $data['code_shipping'];

        $newShipping = Shipping::create($data);
        // if($request->has('email')){
        //     $newShipping->shippings()->sync($request->email);
        // }
        // if($request->has('telephone')){
        //     $newShipping->shippings()->sync($request->telephone);

        // }
        // if($request->has('code_shipping')){
        //     $newShipping->shippings()->sync($request->code_shipping);

        // }

        return redirect()->route('admin.shippings.show', $newShipping->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shipping  $shipping
     *
     */
    public function show(Shipping $shipping)
    {
        return view('admin.shippings.show', compact('shipping'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipping  $shipping
     *
     */
    public function edit(Shipping $shipping)
    {
        return view('admin.shippings.edit', compact('shipping'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipping  $shipping
     *
     */
    public function update(Request $request, Shipping $shipping)
    {
        $data = $request->all();
        $shipping->update($data);

        return redirect()->route('admin.shippings.index')->with('message', "$shipping->name updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipping  $shipping
     *
     */
    public function destroy(Shipping $shipping)
    {
        $shipping->delete();
        return redirect()->route('admin.shippings.index')->with('message', "$shipping->name deleted successfully");
    }
}
