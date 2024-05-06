<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = [
        'name', 'des'
    ];


    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'type_id');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'type_id');
    }


}
