<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaTrabalho
 */
class CanadaTrabalho extends Model
{
    protected $table = 'canada_trabalho';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'usuario',
        'ramo',
        'empresa',
        'endereco',
        'emailcontato',
        'site',
        'cargo',
        'datai',
        'dataf',
        'salario',
        'avaliacao',
        'observacao',
        'datahora',
        'emailcurriculo'
    ];

    protected $guarded = [];

        
}