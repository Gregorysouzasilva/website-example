<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormulariosCampo
 */
class FormulariosCampo extends Model
{
    protected $table = 'formularios_campos';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'formulario',
        'corfonte',
        'corfundo',
        'imagem',
        'usuario',
        'datahora',
        'nomecampo',
        'labelcampo',
        'tipo',
        'dica',
        'obrigatorio',
        'ordem',
        'tamanho',
        'opcoesselect'
    ];

    protected $guarded = [];

        
}