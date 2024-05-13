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
        $assets = Asset::get();
        return view('asset.index', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $data = new Asset;

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

       $data -> save();

       return redirect()->route('asset.index')
       ->with('success','Asset added successfully!');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Asset::create($request->all());
   
        return redirect()->route('asset.index')
                        ->with('success','Asset added successfully!');
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
       $asset = Asset::find($id);
        return 
        [
            'asset_name' => $asset->assetName,
            'asset_type' => $asset->assetType,
            'asset_desc' => $asset->assetDesc,
            'asset_status' => $asset->assetStatus,
            'asset_location' => $asset->assetLoc,
            'asset_depreciation_code' => $asset->assetDC,
            'asset_fee' => $asset->assetFee,
            'asset_payment_date' => $asset->assetPD, 
        ];

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //$asset = Asset::findOrFail($id);
        //return view('asset.update', compact ('asset'));

        //$asset = Asset::findOrFail($id);
        //$asset ->update($equest->all());

        $asset = Asset::find($request->editAsset);
        $asset->update([
            'asset_name' => $request->editName,
            'asset_type' => $request->editType,
            'asset_desc' => $request->editDesc,
            'asset_status' => $request->editStatus,
            'asset_location' => $request->editLoc,
            'asset_depreciation_code' => $request->editDC,
            'asset_fee' => $request->editFee,
            'asset_payment_date' => $request->editPD,

        ]);
        return redirect('/asset');

        /*$employees = Employees::findOrFail($id);
        $employees->update($request->all());
  
        return redirect()->route('employees.index')
                        ->with('success','Employees updated successfully');*/
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asset = Asset::find($request->deleteAsset);
        $asset->delete();
        return redirect('/asset');
    }
}
