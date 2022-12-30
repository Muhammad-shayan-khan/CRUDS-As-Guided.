<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerform_model extends Model
{
    use HasFactory;
    protected $table = 'customerform';
    protected $primarykey = 'customer_id';
}
