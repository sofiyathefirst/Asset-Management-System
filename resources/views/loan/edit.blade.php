@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Update Loan</h2>
</div>

<!-- add Assets Form-->
<form action="{{route('loan.update', $loans->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="loan_code" class="form-label">Loan Code</label>
        <input type="text" class="form-control" id="loan_code" name="loan_code" value="{{ old('loan_code', $loans->loan_code)}}">
    </div>
    <div class="mb-3">
        <label for="loan_name" class="form-label">Loan Name</label>
        <input type="text" class="form-control" id="loan_name" name="loan_name" value="{{ old('loan_name', $loans->loan_name)}}">
    </div>
    <div class="mb-3">
        <label for="loan_type" class="form-label">Loan Type</label>
        <input type="text" class="form-control" id="loan_type" name="loan_type" value="{{ old('loan_type',$loans->loan_type)}}">
    </div>
    <div class="mb-3">
        <label for="loan_borrower" class="form-label">Loan Borrower</label>
        <input type="text" class="form-control" id="loan_borrower" name="loan_borrower" value="{{ old('loan_borrower',$loans->loan_borrower)}}">
    </div>
    <div class="mb-3">
        <label for="loan_financiar" class="form-label">Loan Financiar</label>
        <input type="text" class="form-control" id="loan_financiar" name="loan_financiar" value="{{ old('loan_financiar',$loans->loan_financiar)}}">
    </div><div class="mb-3">
        <label for="loan_account_num" class="form-label">Loan Account Number</label>
        <input type="text" class="form-control" id="loan_account_num" name="loan_account_num" value="{{ old('loan_account_num',$loans->loan_account_num)}}">
    </div>
    <div class="mb-3">
        <label for="loan_principal" class="form-label">Loan Principal</label>
        <input type="text" class="form-control" id="loan_principal" name="loan_principal" value="{{ old('loan_principal',$loans->loan_principal)}}">
    </div>
    <div class="mb-3">
        <label for="loan_interest" class="form-label">Loan Interest</label>
        <input type="text" class="form-control" id="loan_interest" name="loan_interest" value="{{ old('loan_interest',$loans->loan_interest)}}">
    </div>
    <div class="mb-3">
        <label for="loan_amount" class="form-label">Loan Amount</label>
        <input type="text" class="form-control" id="loan_amount" name="loan_amount" value="{{ old('loan_amount',$loans->loan_amount)}}">
    </div>
    <div class="mb-3">
        <label for="loan_monthly_payment" class="form-label">Loan Monthly Payment</label>
        <input type="text" class="form-control" id="loan_monthly_payment" name="loan_monthly_payment" value="{{ old('loan_monthly_payment',$loans->loan_monthly_payment)}}">
    </div>
        <div class="text-end mb-2">
            <a href="{{route('loan.index')}}" type="button" class="btn btn-light">Close</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
</form>
@endsection