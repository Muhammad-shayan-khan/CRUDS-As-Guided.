<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stdForm_model extends Model
{
    use HasFactory;
    protected $table = 'stdForm';
    protected $primarykey = 'customer_id';

}
