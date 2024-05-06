<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubPlans extends Model
{
    use HasFactory;
    protected $table = 'club_plans';
    protected $fillable = [
        'title',
        'date',
        'presenter',
        'status',
        'club_id',
        'year_id',
        'location_id',
    ];

    public function club(){
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function location(){
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function activityYear(){
        return $this->belongsTo(ActivityYear::class, 'year_id');
    }
}
