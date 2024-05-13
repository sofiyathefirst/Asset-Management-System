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
            <a href="{{route('asset.create')}}" type="button" class="btn btn-primary">Add Asset</a>
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
                                <button type="button" class="btn editUser">
                                    <a href="{{route('asset.edit', $asset->id)}}" type="button" class="bi-pencil text-primary"></a>
                                </button>
                                <button type="button" class="btn deleteUser">
                                    <a href="{{route('asset.destroy', $asset->id)}}" type="button" class="bi bi-trash3 text-primary"></a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
