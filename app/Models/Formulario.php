<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formulario
 */
class Formulario extends Model
{
    protected $table = 'formularios';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'nome',
        'corfonte',
        'corfundo',
        'imagem',
        'metodo',
        'usuario',
        'datahora',
        'destino',
        'pagina',
        'tabela',
        'campoduplicidade',
        'campousuario',
        'stringduplicidade',
        'campopagina'
    ];

    protected $guarded = [];

    public function campos() {
        return $this->hasMany('App\Models\FormulariosCampo', 'formulario', 'nome')->where(['cliente' => \Session::get('client_id')]);
    }
        
}