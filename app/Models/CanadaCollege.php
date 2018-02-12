<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaCollege
 */
class CanadaCollege extends Model
{
    protected $table = 'canada_colleges';

    public $timestamps = false;

    protected $fillable = [
        'instituicao',
        'link',
        'id_instituicao',
        'local'
    ];

    protected $guarded = [];

        
}