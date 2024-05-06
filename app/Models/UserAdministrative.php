<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdministrative extends Model
{
    use HasFactory;

    protected $table = 'club_management';
    protected $fillable = ['user_id', 'club_id', 'deputy_id', 'administrative_id', ''];
}
