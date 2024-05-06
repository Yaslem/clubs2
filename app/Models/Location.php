<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $fillable = [
        'name',
        'des'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'location_id');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'location_id');
    }

    public function clubplans(){
        return $this->hasMany(ClubPlans::class, 'location_id');
    }
}
