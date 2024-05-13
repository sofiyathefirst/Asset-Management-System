@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Add Asset</h2>
</div>

<!-- add Assets -->
<form action="{{ route('asset.store') }}" method="POST">
    @csrf
    <!-- Edit Modal -->

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Example label</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
      </div>
    </div>

    <!--<div class="modal fade" id="addAsset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>-->
</form>
<!-- add Assets -->