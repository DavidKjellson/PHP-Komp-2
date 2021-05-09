<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fill = [
        'firstname',
        'lastname',
        'birthday',
        'email'
    ];
}
