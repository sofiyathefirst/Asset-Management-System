<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('asset.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $asset = Asset::create([
            'asset_name' => $request->assetName,
            'asset_type' => $request->assetType,
            'asset_desc' => $request->assetDesc,
            'asset_status' => $request->assetStatus,
            'asset_location' => $request->assetLoc,
            'asset_dc' => $request->assetDC,
            'asset_fee' => $request->assetFee,
            'asset_pd' => $request->assetPD,
            'asset_app_by' => $request->assetAppBy,
            'asset_app_dt' => $request->assetAppDT,         
        ]);
        return redirect()->route('asset.index')
                        ->with('success','Asset created successfully.');

        /*$request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
  
        User::create($request->all());
   
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');*/
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
