<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubsReports extends Model
{
    use HasFactory;

    protected $table = 'clubs_reports';
    protected $fillable = ['title', 'image'];

}
