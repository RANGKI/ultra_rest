<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'Characters';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'MODEL',
        'DESCRIPTION',
        'UNIT',
        'PURPOSE',
        'PRODUCTION'
    ];
}
