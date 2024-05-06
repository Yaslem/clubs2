<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'title', 'body', 'image', 'user_id', 'cat_id', 'club_id', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(){
        return $this->belongsTo(CategoryOrder::class, 'cat_id');
    }

    public function club(){
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function replies(){
        return $this->hasMany(Reply::class, 'order_id');
    }
}
