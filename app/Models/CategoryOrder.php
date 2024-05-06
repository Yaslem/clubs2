<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryOrder extends Model
{
    use HasFactory;

    protected $table = 'category_orders';

    protected $fillable = ['name'];

    public function orders(){
        return $this->hasMany(Order::class, 'cat_id');
    }
}
