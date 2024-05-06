<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected  $table = 'results';
    protected $fillable = ['number', 'manager_name', 'result', 'year_id', 'club_id'];

    public function year(){
        return $this->belongsTo(ActivityYear::class, 'year_id');
    }

    public function club(){
        return $this->belongsTo(Club::class, 'club_id');
    }
}
