<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 */
class Usuario extends Model
{
    protected $table = 'usuarios';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'nome',
        'email',
        'bairro',
        'cidade',
        'estado',
        'pais',
        'facebook',
        'senha',
        'datahora',
        'aut',
        'site',
        'status'
    ];

    protected $guarded = [];

        
}