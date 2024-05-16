<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Asset;
use Hash;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $assets = Asset::all();
        return view('asset.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('asset.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $request->validate([
        'asset_name' => 'required',
        'asset_type' => 'required',
        'asset_desc' => 'nullable|string',
        'asset_status' => 'nullable|string',
        'asset_location' => 'nullable|string',
        'asset_depreciation_code' => 'nullable|string',
        'asset_fee' => 'required',
        'asset_payment_date' => 'nullable',
        'asset_approved_by' => 'nullable',
        'asset_approved_datetime' => 'nullable'
    ]);

    Asset::create($request->all());

       return redirect()->route('asset.index')
                        ->with('success','Asset added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asset $assets)
    {
        //
        return view('asset.show',compact('assets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        //dd($assets);
        $assets = Asset::find($id);
        return view('asset.edit',compact('assets'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $assets = Asset::findOrFail($id);

        //Validate the request data
        $validated = $request->validate([
        'asset_name' => 'required',
        'asset_type' => 'required',
        'asset_desc' => 'nullable|string',
        'asset_status' => 'nullable|string',
        'asset_location' => 'nullable|string',
        'asset_depreciation_code' => 'nullable|string',
        'asset_fee' => 'required',
        'asset_payment_date' => 'nullable',
        'asset_approved_by' => 'nullable',
        'asset_approved_datetime' => 'nullable'
    ]);

       $assets->update($validated);

        return redirect()->route('asset.index')->with('success', 'Asset updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $assets = Asset::findOrFail($id);
        $assets->delete();
        
        return redirect()->route('asset.index')->with('success', 'Asset deleted successfully.');
    }
}
