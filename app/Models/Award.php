<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $table = 'awards';
    protected $fillable = [
        'status', 'coordinator', 'user_id', 'reservation_award_id', 'award_id'
    ];

    public function typeAward()
    {
        return $this->belongsTo(TypeAwards::class, 'award_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function coordinatorUser()
    {
        return $this->belongsTo(User::class, 'coordinator');
    }

    public function reservationAward()
    {
        return $this->belongsTo(ReservationAward::class, 'reservation_award_id');
    }
}
