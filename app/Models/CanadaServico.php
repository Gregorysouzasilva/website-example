<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaServico
 */
class CanadaServico extends Model
{
    protected $table = 'canada_servicos';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'usuario',
        'tipo',
        'empresa',
        'endereco',
        'emailcontato',
        'site',
        'servicocontratado',
        'data',
        'valor',
        'avaliacao',
        'observacao',
        'datahora',
        'contato'
    ];

    protected $guarded = [];

        
}