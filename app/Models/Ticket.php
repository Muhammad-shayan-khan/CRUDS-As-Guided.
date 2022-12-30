<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name','email','subject','department_id'];

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
