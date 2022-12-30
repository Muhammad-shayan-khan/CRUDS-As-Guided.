<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carInfo_model extends Model
{
    use HasFactory;
    protected $table = 'carInfo';
    protected $primarykey = 'customer_id';
}
