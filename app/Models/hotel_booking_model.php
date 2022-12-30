<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel_booking_model extends Model
{
    use HasFactory;
    protected $table = 'hotel_booking';
    protected $primarykey = 'customer_id';
}
