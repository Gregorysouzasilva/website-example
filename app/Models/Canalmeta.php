<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Canalmeta
 */
class Canalmeta extends Model
{
    protected $table = 'canalmetas';

    public $timestamps = false;

    protected $fillable = [
        'canal',
        'data',
        'metainscritosdia',
        'metaviewsdia',
        'nome'
    ];

    protected $guarded = [];

        
}