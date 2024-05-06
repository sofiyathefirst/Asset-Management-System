<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procurementMethod extends Model
{
    use HasFactory;
    public $table = 'procurement_method';
    protected $primaryKey = 'id_procurement_method';

    public $fillable = [
        'name_procurement_method',
        'category_procurement_method',
    ];

    protected $casts = [
        'name_procurement_method' => 'string',
        'category_procurement_method' => 'integer',
    ];
}
