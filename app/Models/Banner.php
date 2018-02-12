<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banner
 */
class Banner extends Model
{
    protected $table = 'banner';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'pagina',
        'imagem',
        'titulo',
        'subtitulo',
        'texto',
        'link',
        'usuario',
        'datahora',
        'ordem'
    ];

    protected $guarded = [];
    
    public function formularios() {
        return $this->hasMany('App\Models\Formulario', 'nome', 'vinculo')->with('campos');
    }

    public function getBanner($page, $client_id)
    {
        if (empty($client_id)){
            return FALSE;
        }
        $banner = Banner::where('cliente', $client_id)
                ->where(function($q) use ($page) {
                    $q->where('pagina', 'like', '%todos%')
                    ->orWhere('pagina', 'like', "%$page,%");
                })
                ->with('formularios')
                ->orderBy('ordem')
                ->first();
        return $banner;
    }
        
}