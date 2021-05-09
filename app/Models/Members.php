<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birthday',
        'email'
    ];
}
