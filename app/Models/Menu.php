<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 */
class Menu extends Model
{
    protected $table = 'menus';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'ordem',
        'categoria',
        'opcao',
        'link',
        'usuario',
        'datahora',
        'destinolink'
    ];

    protected $guarded = [];

    public function getMenu($client_id){
        if (empty($client_id)){
            return FALSE;
        }
        $item = Menu::Where(['cliente' => $client_id])->orderBy('ordem', 'asc')->get();
        
        return $item;
    }
}