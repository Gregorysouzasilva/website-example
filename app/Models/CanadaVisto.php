<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaVisto
 */
class CanadaVisto extends Model
{
    protected $table = 'canada_visto';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'usuario',
        'tipovisto',
        'dataaplicacao',
        'datapedidoexame',
        'dataconsulta',
        'dataenvioexame',
        'datapedidopassaporte',
        'datarecebimentopassaporte',
        'datahora',
        'localentrada',
        'observacao',
        'exame_upfront',
        'status'
    ];

    protected $guarded = [];

        
}