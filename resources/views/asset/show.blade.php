@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Asset Details</h2>
</div>

<table class="table table-bordered">
    <tbody>
        <tr class="text-left">
            <th >Asset Name</th>
            <td>{{ $assets->asset_name }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Type</th>
            <td>{{ $assets->asset_type }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Description</th>
            <td>{{ $assets->asset_desc }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Status</th>
            <td>{{ $assets->asset_status }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Location</th>
            <td>{{ $assets->asset_location }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Depreciation Code</th>
            <td>{{ $assets->asset_depreciation_code }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Type</th>
            <td>{{ $assets->asset_type }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Fee</th>
            <td>{{ $assets->asset_fee }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Payment Date</th>
            <td>{{ $assets->asset_payment_date }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Asset Approved By</th>
            <td>{{ $assets->asset_approved_by }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th> Asset Approved Datetime</th>
            <td>{{ $assets->asset_approved_datetime }}</td>
        </tr>
    </tbody>
  </table>
  <div class="text-end mb-2">
    <a href="{{route('asset.index')}}" type="button" class="btn btn-light">Close</a>
    <a href="{{route('asset.edit',$assets->id)}}" type="button" class="btn btn-primary">Edit</a>
</div>
@endsection