<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CanadaEstudo
 */
class CanadaEstudo extends Model
{
    protected $table = 'canada_estudos';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'usuario',
        'tipo',
        'escola',
        'endereco',
        'email',
        'site',
        'contato',
        'curso',
        'datai',
        'dataf',
        'valor',
        'avaliacao',
        'observacao',
        'datahora'
    ];

    protected $guarded = [];

        
}