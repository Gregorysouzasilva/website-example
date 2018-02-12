<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaPrestadore
 */
class CanadaPrestadore extends Model
{
    protected $table = 'canada_prestadores';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'usuario',
        'servico',
        'empresa',
        'endereco',
        'emailcontato',
        'site',
        'data',
        'valor',
        'avaliacao',
        'observacao',
        'datahora'
    ];

    protected $guarded = [];

        
}