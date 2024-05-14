<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Asset;
use Hash;

class AssetsController extends Controller
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
        /*$data = new Asset;

       $data->asset_name = $request->asset_name;
       $data ->asset_type = $request->asset_type;
       $data ->asset_desc = $request->asset_desc;
       $data ->asset_status = $request->asset_status;
       $data ->asset_location = $request->asset_location;
       $data-> asset_depreciation_code = $request->asset_depreciation_code;
       $data-> asset_fee = $request->asset_fee;
       $data ->asset_payment_date = $request->asset_payment_date;
       $data ->asset_approved_by = $request->asset_approved_by;
       $data ->asset_approved_datetime = $request->asset_approved_datetime;

       $data -> save();*/

       $request->validate([
        'asset_name' => 'required',
        'asset_type' => 'required',
        'asset_desc' => 'nullable|string',
        'asset_status' => 'nullable|string',
        'asset_location' => 'nullable|string',
        'asset_depreciation_code' => 'nullable|string',
        'asset_fee' => 'nullable',
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
    public function edit(Asset $assets)
    {
        //
        return view('asset.edit',compact('assets'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asset $assets)
    {
        //
        /*$data = Asset::find($id);

       $data->asset_name = $request->asset_name;
       $data ->asset_type = $request->asset_type;
       $data ->asset_desc = $request->asset_desc;
       $data ->asset_status = $request->asset_status;
       $data ->asset_location = $request->asset_location;
       $data-> asset_depreciation_code = $request->asset_depreciation_code;
       $data-> asset_fee = $request->asset_fee;
       $data ->asset_payment_date = $request->asset_payment_date;

       $data -> save();*/

       $request->validate([
        'asset_name' => 'required',
        'asset_type' => 'required',
        'asset_desc' => 'nullable|string',
        'asset_status' => 'nullable|string',
        'asset_location' => 'nullable|string',
        'asset_depreciation_code' => 'nullable|string',
        'asset_fee' => 'nullable',
        'asset_payment_date' => 'nullable',
        'asset_approved_by' => 'nullable',
        'asset_approved_datetime' => 'nullable'
    ]);

       $assets->update($request->all());

        return redirect()->route('asset.index')->with('success', 'Asset updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $assets)
    {
        //
        $assets->delete();
        return redirect()->route('asset.index')->with('success', 'Asset deleted successfully.');
    }
}
