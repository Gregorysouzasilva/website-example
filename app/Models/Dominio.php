<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dominio
 */
class Dominio extends Model
{
    protected $table = 'dominios';

    public $timestamps = false;

    protected $fillable = [
        'cliente',
        'dominio'
    ];

    protected $guarded = [];

    public function getClientByDomain($domain){
        if (empty($domain)){
            return FALSE;
        }
        $client = Dominio::Where(['dominio' => $domain])->first();
        return $client->cliente;
    }
}