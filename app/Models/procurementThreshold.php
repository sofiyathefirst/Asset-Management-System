<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procurementThreshold extends Model
{
    use HasFactory;
    public $table = 'procurement_threshold';
    protected $primaryKey = 'id_procurement_threshold';

    public $fillable = [
        'name_procurement_threshold',
    ];

    protected $casts = [
        'name_procurement_threshold' => 'string',
    ];
}
