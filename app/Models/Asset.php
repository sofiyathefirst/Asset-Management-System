<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = [
        'asset_name',
        'asset_type',
        'asset_desc',
        'asset_status',
        'asset_location',
        'asset_depreciation_code',
        'asset_fee',
        'asset_payment_date',
        'asset_approved_by',
        'asset_approved_datetime'
    ];
}
