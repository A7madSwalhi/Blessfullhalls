<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $table = 'lessors';
    protected $fillable = [
        'user_id',
        'property_id',
        'status',
        'date',
        'time_slot',
    ] ;

    public $timestamps = false;
}
