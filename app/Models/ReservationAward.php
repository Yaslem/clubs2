<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationAward extends Model
{
    use HasFactory;

    protected $table = 'reservation_award';
    protected $fillable = ['reservation_id'];
    public function award()
    {
        return $this->hasMany(Award::class, 'reservation_award_id');
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }
}
