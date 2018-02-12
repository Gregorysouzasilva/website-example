<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Class Estrutura
 */
class Estrutura extends Model
{
    protected $table = 'estrutura';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'pagina',
        'ordem',
        'tipo',
        'cordefundo',
        'imagem',
        'imagemfundo',
        'corfonte',
        'titulo',
        'subtitulo',
        'texto',
        'vinculotipo',
        'vinculo',
        'usuario',
        'datahora',
        'link',
        'destinolink',
        'imagemtamanho',
        'tamanhocx',
        'restritousuarios',
        'variavelestrutura',
        'stringsql',
        'labelbotao',
        'bloqueio_caixa'
    ];

    protected $guarded = [];
    
    public function itens() {
        return $this->hasMany('App\Models\Itens', 'nome', 'vinculo')->where(['cliente' => \Session::get('client_id')]);
    }
    
    public function formularios() {
        return $this->hasMany('App\Models\Formulario', 'nome', 'vinculo')->where(['cliente' => \Session::get('client_id')])->with('campos');
    }
    
    public function getEstrutura($page, $client_id)
    {
        if (empty($client_id)){
            return FALSE;
        }
        $estrutura = Estrutura::where('cliente', $client_id)
                ->where(function($q) use ($page) {
                    $q->where('pagina', 'like', '%todos%')
                    ->orWhere('pagina', 'like', "%$page,%");
                })
                ->orderBy('ordem')
                ->with('itens', 'formularios')
                ->get();
                return $estrutura;
    }
        
}