<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeDetail extends Model
{
    protected $fillable = ['time_id', 'room_id'];
    use HasFactory;
}
