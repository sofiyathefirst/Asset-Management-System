@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>User Management</h2>
</div>
<div class="row">
    <div class="container bg-white border p-5">
        <div class="text-center"><h1>User List</h1></div>
        <div class="text-end mb-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="bi bi-person-plus-fill"></i>&nbsp;&nbsp;Add User
            </button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Staff ID</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="text-center">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>M-123</td>
                            <td>
                                <span class="badge rounded-pill text-bg-lightprimary">Super Admin</span>
                            </td>
                            <td>
                                <button type="button" class="btn editUser" value="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil text-primary"></i>
                                    
                                </button>
                                <button type="button" class="btn deleteUser" value="{{ $user->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash3 text-primary"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- add User::start -->
<form action="{{ route('user.create') }}" method="post">
    @csrf
    <!-- Edit Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="addName" name="addName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="addEmail" name="addEmail">
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
<!-- add User::end -->
<!-- edit User::start -->
<form action="{{ route('user.update') }}" method="post">
    @csrf
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="editName" name="editName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="editEmail" name="editEmail">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" id="editId" name="editId">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- edit User::end -->
<!-- Softdelete User::start -->
<form action="{{ route('user.destroy') }}" method="post">
    @csrf
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Delete User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this account ?</p>

                    <div class="form-group row mb-2">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deleteName" name="deleteName" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="deleteEmail" name="deleteEmail" disabled>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" class="form-control" id="deleteId" name="deleteId">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Keep Account</button>
                    <button type="submit" class="btn btn-primary">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Softdelete User::end -->
<script>
var userId;

function getUserData() {
    $.ajax({
        type: 'GET',
        url: '/user-edit/' + userId,
        success: function(data) {
            console.log(data);
            $('#editId').val(userId);
            $('#editName').val(data['name']);
            $('#editEmail').val(data['email']);

            $('#deleteId').val(userId);
            $('#deleteName').val(data['name']);
            $('#deleteEmail').val(data['email']);
        }
    });
}

$(".editUser").click(function() {
    userId = $(this).val();
    getUserData();
});

$(".deleteUser").click(function() {
    userId = $(this).val();
    getUserData();
});
</script>
@endsection
