@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Add Asset</h2>
</div>

<!-- add Assets Form-->
<form action="{{ route('asset.update', $asset->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="asset_name" class="form-label">Asset Name</label>
        <input type="text" class="form-control" id="asset_name" name="asset_name" value="{{ $asset->asset_name}}">
    </div>
    <div class="mb-3">
        <label for="asset_type" class="form-label">Asset Type</label>
        <select class="form-select" aria-label="Select Asset Type" id="asset_type" name="asset_type" value="{{ $asset->asset_type}}">
            <option value="1">Residential</option>
            <option value="2">Land</option>
            <option value="3">Banks</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="asset_desc" class="form-label">Asset Description</label>
        <input type="text" class="form-control" id="asset_desc" name="asset_desc" value="{{ $asset->asset_desc}}">
    </div>
    <div class="mb-3">
        <label for="asset_status" class="form-label">Asset Status</label>
        <input type="text" class="form-control" id="asset_status" name="asset_status" value="{{ $asset->asset_status}}">
    </div>
    <div class="mb-3">
        <label for="asset_location" class="form-label">Asset Location</label>
        <input type="text" class="form-control" id="asset_location" name="asset_location" value="{{ $asset->asset_location}}">
    </div>
    <div class="mb-3">
        <label for="asset_depreciation_code" class="form-label">Asset Depreciation Code</label>
        <input type="text" class="form-control" id="asset_depreciation_code" name="asset_depreciation_code" value="{{ $asset->asset_depreciation_code}}">
    </div><div class="mb-3">
        <label for="asset_fee" class="form-label">Asset Fee</label>
        <input type="text" class="form-control" id="asset_fee" name="asset_fee" value="{{ $asset->asset_fee}}">
    </div>
    <div class="mb-3">
        <label for="asset_payment_date" class="form-label">Asset Payment Date</label>
        <input type="text" class="form-control" id="asset_payment_date" name="asset_payment_date" value="{{ $asset->asset_payment_date}}">
    </div>
    <div class="mb-3">
        <label for="asset_approved_by" class="form-label">Asset Approved By</label>
        <input type="text" class="form-control" id="asset_approved_by" name="asset_approved_by" value="{{ $asset->asset_approved_by}}">
    </div><div class="mb-3">
        <label for="asset_approved_datetime" class="form-label">Asset Approved Datetime</label>
        <input type="text" class="form-control" id="asset_approved_datetime" name="asset_approved_datetime" value="{{ $asset->asset_approved_datetime}}">
    </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
</form>