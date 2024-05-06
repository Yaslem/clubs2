<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationCertificate extends Model
{
    use HasFactory;

    protected $table = 'reservation_certificate';
    protected $fillable = ['reservation_id'];

    public function certificate()
    {
        return $this->hasMany(Certificate::class, 'certificate_id');
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

}
