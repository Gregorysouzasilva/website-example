<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Iten
 */
class Itens extends Model
{
    protected $table = 'itens';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'pagina',
        'ordem',
        'nome',
        'titulo',
        'texto',
        'corfonte',
        'corfundo',
        'imagem',
        'link',
        'destinolink',
        'usuario',
        'datahora',
        'valor',
        'imagemtexto',
        'tag',
        'datai',
        'dataf',
        'imagemredonda',
        'stringsql',
        'tipo'
    ];

    protected $guarded = [];

    public function getItens($page, $client_id)
    {
        if (empty($client_id)){
            return FALSE;
        }
        $itens = DB::table('itens')->whereRaw("(pagina like '%$page,%' or pagina like '%todos%')")
                ->where('cliente', $client_id)
                ->orderBy('ordem')
                ->get();
        return $itens;
    }
        
}