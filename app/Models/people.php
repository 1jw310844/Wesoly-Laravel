<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','name','lastName','phone_number','country', 'street',
    ];
}