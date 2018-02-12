<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaCursosCopy
 */
class CanadaCursosCopy extends Model
{
    protected $table = 'canada_cursos_copy';

    public $timestamps = false;

    protected $fillable = [
        'curso_id',
        'nome',
        'link',
        'college',
        'local'
    ];

    protected $guarded = [];

        
}