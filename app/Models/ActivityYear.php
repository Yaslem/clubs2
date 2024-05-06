<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityYear extends Model
{
    use HasFactory;
    protected $table = 'activity_years';
    protected $fillable = ['year', 'notes'];

    public function clubPlans(){
        return $this->hasMany(ClubPlans::class, 'year_id');
    }

    public function results(){
        return $this->hasMany(Results::class, 'year_id');
    }
}
