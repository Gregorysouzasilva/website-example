<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Iten
 */
class Emails extends Model
{
    protected $table = 'emails';

    public $timestamps = true;

    protected $fillable = [
        'cliente',
        'usuario',
        'assunto',
        'read_at',
    ];

    protected $guarded = [];

    public function salvaEmail($cliente, $assunto, $usuario){
        $emails = new Emails;
        $emails->cliente = $cliente;
        $emails->assunto = $assunto;
        $emails->usuario = $usuario;
        return $emails->save();
    }
    
    public function criaImagemRastreio($id){
        $url = "http://brasileiroscanada.com";
        $return = "<img src=$url/email/registra-lido/$id>";
        return $return;
    }
    
    public function registraLido($id, $datahora){
        $emails = Emails::find($id);
        $emails->read_at = $datahora;
        $emails->save();
    }
}