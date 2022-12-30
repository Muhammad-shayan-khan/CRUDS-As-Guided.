<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptop_brand extends Model
{
    use HasFactory;
    protected $table = 'laptop_brand';
    protected $primarykey = 'customer_id';
}
