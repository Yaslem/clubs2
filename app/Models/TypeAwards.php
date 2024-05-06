<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAwards extends Model
{
    use HasFactory;

    protected $table = 'type_awards';
    protected $fillable = ['name', 'des'];

    public function award()
    {
        return $this->hasOne(award::class, 'award_id');
    }

}
