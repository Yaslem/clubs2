<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'levels';
    protected $fillable = [
        'name', 'code'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'level_id');
    }
}