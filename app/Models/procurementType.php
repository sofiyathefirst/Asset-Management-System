<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procurementType extends Model
{
    use HasFactory;
    public $table = 'procurement_type';
    protected $primaryKey = 'id_procurement_type';

    public $fillable = [
        'name_procurement_type',
    ];

    protected $casts = [
        'name_procurement_type' => 'string',
    ];
}
