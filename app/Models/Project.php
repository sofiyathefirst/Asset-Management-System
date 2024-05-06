<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_project';

    public $fillable = [

        'name_project',
        'id_procurement_method',
        'id_procurement_type',
        'id_procurement_cumulative_spend',
        'id_process_status',
        'created_by',
        'created_at',
        'verified_by',
        'verified_at',
        'supported_by',
        'supported_at',
        'approved_by',
        'approved_at'

    ];

    protected $casts = [

        'name_project' => 'string',
        'id_procurement_method' => 'integer',
        'id_procurement_type' => 'integer',
        'id_procurement_cumulative_spend' => 'integer',
        'id_process_status' => 'integer',
        'created_by' => 'integer',
        'created_at' => 'datetime',
        'verified_by' => 'integer',
        'verified_at' => 'datetime',
        'supported_by' => 'integer',
        'supported_at' => 'datetime',
        'approved_by' => 'integer',
        'approved_at' => 'datetime'

    ];
}
