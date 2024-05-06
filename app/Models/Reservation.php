<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'reservations';
    protected $fillable = [
        'title', 'is_share', 'location_id', 'from', 'to', 'is_attend', 'presenter', 'date', 'notes', 'status', 'hospitality', 'projector',  'club_id', 'type_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'reservation_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function award()
    {
        return $this->hasOne(ReservationAward::class, 'reservation_id');
    }

    public function certificates()
    {
        return $this->hasOne(ReservationCertificate::class, 'reservation_id');
    }


    public function attendees()
    {
        return $this->hasMany(Attende::class, 'reservation_id');
    }

    public function getUserAttend($relations)
    {
        $UserId = Auth::user()->id;
        foreach ($relations as $relation)
        {
            if($relation->user_id == $UserId)
            {
                return true;
            }else{
                return false;
            }
        }
    }

    public function activityUrl(){
        return $this->hasOne(UrlActivity::class, 'activity_id');
    }


}
