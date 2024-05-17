@extends('layouts.app')

@section('content')
<div class="page-header pt-3">
    <h2>Loan Details</h2>
</div>

<table class="table table-bordered">
    <tbody>
        <tr class="text-left">
            <th >Loan Code</th>
            <td>{{  $loans->loan_code }}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Name</th>
            <td>{{ $loans->loan_name}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Type</th>
            <td>{{$loans->loan_type}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Borrower</th>
            <td>{{$loans->loan_borrower}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Financiar</th>
            <td>{{$loans->loan_financiar}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Account Number</th>
            <td>{{$loans->loan_account_num}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Principal</th>
            <td>{{$loans->loan_principal}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Interest</th>
            <td>{{$loans->loan_interest}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Amount</th>
            <td>{{$loans->loan_amount}}</td>
        </tr>
    </tbody>
    <tbody>
        <tr class="text-left">
            <th >Loan Monthly Payment</th>
            <td>{{$loans->loan_monthly_payment}}</td>
        </tr>
    </tbody>
  </table>
  <div class="text-end mb-2">
    <a href="{{route('loan.index')}}" type="button" class="btn btn-light">Close</a>
    <a href="{{route('loan.edit',$loans->id)}}" type="button" class="btn btn-primary">Edit</a>
</div>
@endsection