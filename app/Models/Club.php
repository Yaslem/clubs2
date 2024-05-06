<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clubs';
    protected $fillable = [
        'name', 'description', 'slug', 'goals', 'vision', 'values', 'message', 'telegram', 'whatsapp', 'cover', 'avatar', 'is_active', 'manager_id',
    ];

    public function clubManager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_club', 'club_id', 'user_id', 'id', 'id');
    }

    public function clubManagement()
    {
        return $this->belongsToMany(User::class, 'club_management', 'club_id', 'user_id', 'id', 'id');
    }

    public function deputy()
    {
        return $this->belongsToMany(User::class, 'club_management', 'club_id', 'deputy_id', 'id', 'id');
    }

    public function administrative()
    {
        return $this->belongsToMany(Administrative::class, 'club_management', 'club_id', 'administrative_id', 'id', 'id');
    }

    public function ClubStatus()
    {
        return $this->hasOne(User::class, 'club_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'club_id');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'club_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'club_id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'club_id');
    }

    public function clubplans(){
        return $this->hasMany(ClubPlans::class, 'club_id');
    }

    public function results(){
        return $this->hasMany(Results::class, 'club_id');
    }

}
