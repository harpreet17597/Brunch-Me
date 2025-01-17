<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantTag extends Model
{
    use HasFactory;
    protected $fillable = ['restaurant_id','tag_id'];
}
