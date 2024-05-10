@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Assets Management</h2>
</div>
<!-- Asset List-->
<div class="row">
    <div class="container bg-white border p-5">
        <div class="text-center"><h1>Assets List</h1></div>
        <div class="text-end mb-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAsset">
                <i class="bi bi-person-plus-fill"></i>&nbsp;&nbsp;Add Asset
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Status</th>
                        <th scope="col">Asset Fee</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $asset)
                        <tr class="text-center">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $asset->asset_name }}</td>
                            <td>{{ $asset->asset_type }}</td>
                            <td>{{ $asset->asset_status }}</td>
                            <td>{{ $asset->asset_fee }}</td>
                            <td>
                                <button type="button" class="btn editUser" value="{{ $asset->id }}" data-bs-toggle="modal" data-bs-target="#editAsset">
                                    <i class="bi bi-pencil text-primary"></i>
                                </button>
                                <button type="button" class="btn deleteUser" value="{{ $asset->id }}" data-bs-toggle="modal" data-bs-target="#deleteAsset">
                                    <i class="bi bi-trash3 text-primary"></i>
                                </button>
                                <button type="button" class="btn viewUser" value="{{ $asset->id }}" data-bs-toggle="modal" data-bs-target="#deleteAsset">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- add Assets -->
<form action="{{ route('asset.create') }}" method="post">
    @csrf
    <!-- Edit Modal -->
    <div class="modal fade" id="addAsset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Asset</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetName" name="assetName">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetType" name="assetType">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetDesc" name="assetDesc">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetStatus" name="assetStatus">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Location</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetLoc" name="assetLoc">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Depreciation Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetDC" name="assetDC">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Fee</label>
                        <div class="col-sm-10">
                            <input type="float" class="form-control" id="assetFee" name="assetFee">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Payment Date</label>
                        <div class="col-sm-10">
                            <input type="" class="form-control" id="assetPD" name="assetPD">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Approved By</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetAppBy" name="assetAppBy">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Approved Date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetAppDT" name="assetAppDT">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- add Assets -->

<!-- edit Assets -->
<form action="{{ route('asset.update') }}" method="post">
    @csrf
    <!-- Edit Modal -->
    <div class="modal fade" id="editAsset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Asset</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetName" name="editName">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetType" name="editType">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Description</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetDesc" name="editDesc">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetStatus" name="editStatus">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Location</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetLoc" name="editLoc">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Depreciation Code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="assetDC" name="editDC">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Fee</label>
                        <div class="col-sm-10">
                            <input type="float" class="form-control" id="assetFee" name="editFee">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Payment Date</label>
                        <div class="col-sm-10">
                            <input type="" class="form-control" id="assetPD" name="edittPD">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" id="editAsset" name="editAsset">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- edit asset -->

<!--Delete Asset -->
<form action="{{ route('asset.destroy') }}" method="post">
    @csrf
    <div class="modal fade" id="deleteAsset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this account ?</p>

                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Asset Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deleteName" name="deleteName" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Asset Type</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="deleteType" name="deleteType" disabled>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" id="deleteAsset" name="deleteAsset">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Keep Account</button>
                    <button type="submit" class="btn btn-primary">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    var assetId;
    
    function getAssetData() {
        $.ajax({
            type: 'GET',
            url: '/asset-edit/' + assetId,
            success: function(data) {
                console.log(data);
                $('#editAsset').val(assetId);
                $('#editName').val(data['asset_name']);
                $('#editType').val(data['asset_type']);
                $('#editDesc').val(data['asset_desc']);
                $('#editStatus').val(data['asset_status']);
                $('#editLoc').val(data['asset_location']);
                $('#editDC').val(data['asset_depreciation_code']);
                $('#editFee').val(data['asset_fee']);
                $('#editPD').val(data['asset_payment_date']);
    
                $('#deleteAsset').val(assetId);
                $('#deleteName').val(data['asset_name']);
                $('#deleteType').val(data['asset_type']);
            }
        });
    }
    
    $(".editAsset").click(function() {
        assetId = $(this).val();
        getAssetData();
    });
    
    $(".deleteAsset").click(function() {
        assetId = $(this).val();
        getAssetData();
    });
    </script>
@endsection
