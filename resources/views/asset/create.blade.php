@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Add Asset</h2>
</div>

<!-- add Assets Form-->
<form action="{{ route('asset.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="asset_name" class="form-label">Asset Name</label>
        <input type="text" class="form-control" id="asset_name" name="asset_name" placeholder="Asset Name">
    </div>
    <div class="mb-3">
        <label for="asset_type" class="form-label">Asset Type</label>
        <select class="form-select" aria-label="Select Asset Type" id="asset_type" name="asset_type">
            <option value="Residential">Residential</option>
            <option value="Land">Land</option>
            <option value="Banks">Banks</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="asset_desc" class="form-label">Asset Description</label>
        <input type="text" class="form-control" id="asset_desc" name="asset_desc" placeholder="Asset Description">
    </div>
    <div class="mb-3">
        <label for="asset_status" class="form-label">Asset Status</label>
        <input type="text" class="form-control" id="asset_status" name="asset_status" placeholder="Asset Status">
    </div>
    <div class="mb-3">
        <label for="asset_location" class="form-label">Asset Location</label>
        <input type="text" class="form-control" id="asset_location" name="asset_location" placeholder="Asset Location">
    </div>
    <div class="mb-3">
        <label for="asset_depreciation_code" class="form-label">Asset Depreciation Code</label>
        <input type="text" class="form-control" id="asset_depreciation_code" name="asset_depreciation_code" placeholder="Asset Depreciation Code">
    </div><div class="mb-3">
        <label for="asset_fee" class="form-label">Asset Fee</label>
        <input type="text" class="form-control" id="asset_fee" name="asset_fee" placeholder="Asset Fee">
    </div>
    <div class="mb-3">
        <label for="asset_payment_date" class="form-label">Asset Payment Date</label>
        <input type="text" class="form-control" id="asset_payment_date" name="asset_payment_date" placeholder="Asset Payment Date">
    </div>
    <div class="mb-3">
        <label for="asset_approved_by" class="form-label">Asset Approved By</label>
        <input type="text" class="form-control" id="asset_approved_by" name="asset_approved_by" placeholder="Asset Approved By">
    </div><div class="mb-3">
        <label for="asset_approved_datetime" class="form-label">Asset Approved Datetime</label>
        <input type="text" class="form-control" id="asset_approved_datetime" name="asset_approved_datetime" placeholder="Asset Approved DateTime">
    </div>
    <div class="text-end mb-2">
        <a href="{{route('asset.index')}}" type="button" class="btn btn-light">Close</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
        
</form>
@endsection
<!-- add Assets -->