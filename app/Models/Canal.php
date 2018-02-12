<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Canal
 */
class Canal extends Model
{
    protected $table = 'canal';

    public $timestamps = false;

    protected $fillable = [
        'canal',
        'datahora',
        'views',
        'videos',
        'inscritos'
    ];

    protected $guarded = [];

        
}