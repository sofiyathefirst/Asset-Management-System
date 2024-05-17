@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Loans Management</h2>
</div>
<div class="row">
    <div class="container bg-white border p-5">
        <div class="text-center"><h1>Loan List</h1></div>
        <div class="text-end mb-2">
            <a href="{{route('loan.create')}}" type="button" class="btn btn-primary">Add Loan</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Loan Code</th>
                        <th scope="col">Loan Name</th>
                        <th scope="col">Loan Type</th>
                        <th scope="col">Loan Borrower</th>
                        <th scope="col">Loan Financiar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($loans as $loan)
                        <tr class="text-center">
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $loan->loan_code }}</td>
                            <td>{{ $loan->loan_name }}</td>
                            <td>{{ $loan->loan_type }}</td>
                            <td>{{ $loan->loan_borrower }}</td>
                            <td>{{ $loan->loan_financiar }}</td>
                            <td>
                                <button type="button" class="btn editUser">
                                    <a href="{{route('loan.edit',$loan->id)}}" type="button" class="bi-pencil text-primary"></a>
                                </button>
                                <form action="{{ route('loan.destroy',$loan->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn deleteUser">
                                        <a class="bi bi-trash3 text-primary" onclick="return confirm('Are you sure you want to delete this loan?')"></a>
                                    </button>
                                </form>
                                <button type="button" class="btn showUser">
                                    <a href="{{route('loan.show',$loan->id)}}" type="button" class="bi bi-three-dots text-primary"></a>
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
