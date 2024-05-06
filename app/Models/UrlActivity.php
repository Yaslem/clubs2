<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlActivity extends Model
{
    use HasFactory;

    protected $table = 'url_activities';

    protected $fillable = ['url', 'activity_id','is_open'];

    public function activity(){
        return $this->belongsTo(Reservation::class, 'activity_id');
    }
}
