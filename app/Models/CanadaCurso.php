<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaCurso
 */
class CanadaCurso extends Model
{
    protected $table = 'canada_cursos';

    public $timestamps = false;

    protected $fillable = [
        'curso_id',
        'curso',
        'link',
        'college',
        'local'
    ];

    protected $guarded = [];

        
}