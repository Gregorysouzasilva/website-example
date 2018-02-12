<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pagina
 */
class Pagina extends Model
{
    protected $table = 'pagina';

    public $timestamps = false;

    protected $fillable = [
        'pagina',
        'titulo',
        'descricao',
        'tags',
        'usuario',
        'datahora',
        'cliente',
        'imagempadrao',
        'somentecadastrados',
        'somentepropriousuario'
    ];

    protected $guarded = [];

    
    public function getPage($page, $client_id){
        if (empty($client_id)){
            return FALSE;
        }
        $pagina = Pagina::where('pagina', 'like', "%$page")->where(['cliente' => $client_id])->first();
        return $pagina;
    }
}