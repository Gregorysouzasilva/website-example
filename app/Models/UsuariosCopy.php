<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosCopy
 */
class UsuariosCopy extends Model
{
    protected $table = 'usuarios_copy';

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