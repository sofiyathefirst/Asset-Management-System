@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Add Loan</h2>
</div>

<!-- add Assets Form-->
<form action="{{ route('loan.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="loan_code" class="form-label">Loan Code</label>
        <input type="text" class="form-control" id="loan_code" name="loan_code" placeholder="Loan Code">
    </div>
    <div class="mb-3">
        <label for="loan_name" class="form-label">Loan Name</label>
        <input type="text" class="form-control" id="loan_name" name="loan_name" placeholder="Loan Name">
    </div>
    <div class="mb-3">
        <label for="loan_type" class="form-label">Loan Type</label>
        <input type="text" class="form-control" id="loan_type" name="loan_type" placeholder="Loan Type">
    </div>
    <div class="mb-3">
        <label for="loan_borrower" class="form-label">Loan Borrower</label>
        <input type="text" class="form-control" id="loan_borrower" name="loan_borrower" placeholder="Loan Borrower">
    </div>
    <div class="mb-3">
        <label for="loan_financiar" class="form-label">Loan Financiar</label>
        <input type="text" class="form-control" id="loan_financiar" name="loan_financiar" placeholder="Loan Financiar">
    </div>
    <div class="mb-3">
        <label for="loan_account_num" class="form-label">Loan Account Number</label>
        <input type="text" class="form-control" id="loan_account_num" name="loan_account_num" placeholder="Loan Account Number">
    </div>
    <div class="mb-3">
        <label for="loan_principal" class="form-label">Loan Principal</label>
        <input type="text" class="form-control" id="loan_principal" name="loan_principal" placeholder="Loan Principal">
    </div>
    <div class="mb-3">
        <label for="loan_interest" class="form-label">Loan Interest</label>
        <input type="text" class="form-control" id="loan_interest" name="loan_interest" placeholder="Loan Interest">
    </div>
    <div class="mb-3">
        <label for="loan_amount" class="form-label">Loan Amount</label>
        <input type="text" class="form-control" id="loan_amount" name="loan_amount" placeholder="Loan Amount">
    </div>
    <div class="mb-3">
        <label for="loan_monthly_payment" class="form-label">Loan Monthly Payment</label>
        <input type="text" class="form-control" id="loan_monthly_payment" name="loan_monthly_payment" placeholder="Loan Monthly Payment">
    </div>
    <div class="text-end mb-2">
        <a href="{{route('loan.index')}}" type="button" class="btn btn-light">Close</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
        
</form>
@endsection