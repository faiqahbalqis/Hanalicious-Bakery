<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = 'staff';
    protected $fillable = [
        'staff_id', 'name', 'position', 'phone', 'address', 'price',
    ];
}
