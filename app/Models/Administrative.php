<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrative extends Model
{
    use HasFactory;

    protected $table = 'administratives';
    protected $fillable = ['name'];


    public function users()
    {
        return $this->belongsToMany(User::class, 'club_management', 'administrative_id', 'user_id', 'id', 'id');
    }

    public function userdeputy()
    {
        return $this->belongsToMany(User::class, 'club_management', 'administrative_id', 'deputy_id', 'id', 'id');
    }

    public function clubdeputy()
    {
        return $this->belongsToMany(Club::class, 'club_management', 'administrative_id', 'club_id', 'id', 'id');
    }
}
