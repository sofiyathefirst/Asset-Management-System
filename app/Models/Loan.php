<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'loan_code',
        'loan_name',
        'loan_type',
        'loan_borrower',
        'loan_financiar',
        'loan_account_num',
        'loan_principal',
        'loan_interest',
        'loan_amount',
        'loan_monthly_payment',
        'asset_approved_by',
        'asset_approved_datetime'
    ];
}
