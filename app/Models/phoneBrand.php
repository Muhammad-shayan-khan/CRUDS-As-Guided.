<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phoneBrand extends Model
{
    use HasFactory;
    protected $table = "phoneBrand";
    protected $primarykey = "customer_id";
}
