<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itens;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
use Mail;
use App\Models\Emails;
use Illuminate\Mail\Mailer;

class EmailNovidades extends Controller
{
    public function send()
    {
        $cliente = 63;
        $hoje = Carbon::today();
        $inicio = Carbon::now()->addDays(-7);
        //$inicio = '2017-10-01';
//        $emails = new Emails;
        $novidades = DB::select("select itens.*, estrutura.tipo from itens 
                    LEFT JOIN estrutura ON estrutura.vinculo = itens.nome
                    where itens.cliente = '$cliente' and estrutura.tipo IN "
                . "('CX_NOTICIAS','CX_ULTIMAS_NOTICIAS','CX_NOTICIAS_CARD') and "
                . "(datai = '0000-00-00' or (datai <= '$hoje' and dataf >= '$hoje')) "
                . "and itens.datahora>='$inicio' order by id desc limit 10");
        $data['cliente'] = $cliente;
        if (count($novidades) < 1){
            return false;
        }
        foreach ($novidades as &$novidade){
            $itemtexto = explode(".", strip_tags($novidade->texto)); 
            $novidade->texto = substr($itemtexto[0],0,200).'...'; 
            $slug = str_slug($novidade->titulo, '-');
            $iditem = $novidade->id;
            $novidade->url_noticia = "http://brasileiroscanada.com/noticias/$iditem/$slug";
            
        }
        $data['noticias'] = $novidades;
        
        if (env('MAIL_TEST') == TRUE) {
            $usuarios = Usuario::whereId(64);
        } else {
            $usuarios = Usuario::select('*');
        }
        $usuarios->chunk(100, function($usuarios) use ($data) {
            foreach($usuarios as $usuario){
                $data['usuario'] = $usuario;
                echo "$usuario->email \n";
                Mail::to($usuario->email)->queue(new \App\Mail\myMail($data));
            }
        
        });
    if (count(mail::failures())>0) {
            dd(mail::failures());
    }
    return response()->json(['message' => 'Request completed']);
    }
}
