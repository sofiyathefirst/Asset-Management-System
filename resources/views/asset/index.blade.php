@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Assets Management</h2>
</div>
<!-- Asset List-->
<div class="row">
    @csrf
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
                                    <a href="{{route('asset.edit',$asset->id)}}" type="button" class="bi-pencil text-primary"></a>
                                </button>
                                <form action="{{ route('asset.destroy',$asset->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn deleteUser">
                                        <a class="bi bi-trash3 text-primary" onclick="return confirm('Are you sure you want to delete this asset?')"></a>
                                    </button>
                                </form>
                                <button type="button" class="btn showUser">
                                    <a href="{{route('asset.show',$asset->id)}}" type="button" class="bi bi-three-dots text-primary"></a>
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
