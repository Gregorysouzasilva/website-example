<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Principal
 */
class Principal extends Model
{
    protected $table = 'principal';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'logo',
        'titulopagina',
        'telefone',
        'endereco',
        'facebook',
        'twitter',
        'linkedin',
        'skype',
        'icone',
        'email',
        'razaosocial',
        'cnpj',
        'usuario',
        'datahora',
        'youtube',
        'instagram',
        'descricao',
        'appid',
        'google',
        'site',
        'fbadminid',
        'idyoutube',
        'linklogin',
        'scriptadicional',
        'googleverificationcode'
    ];

    protected $guarded = [];

    public function getPrincipal($client){
        if (empty($client)){
            return FALSE;
        }
        $principal = Principal::Where(['cliente' => $client])->first();
        return $principal;
    }
        
}