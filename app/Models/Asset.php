<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    protected $fillable = [
        'asset_name',
        'asset_type',
        'asset_desc',
    ];
}
