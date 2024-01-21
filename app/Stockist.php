<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockist extends Model
{
    public $table = 'stockists';
    protected $fillable = [
        'name', 'phone', 'email', 'address',
    ];
}
