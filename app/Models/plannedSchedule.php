<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plannedSchedule extends Model
{
    use HasFactory;
    public $table = 'planned_schedule';
    protected $primaryKey = 'id_planned_schedule';

    public $fillable = [
        'name_planned_schedule',
    ];

    protected $casts = [
        'name_planned_schedule' => 'string',
    ];
}
