<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Pagina;
use App\Models\Principal; 
use App\Models\Menu;
use Session;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public $paginaModel;
    public $principalModel;
    public $menuModel;
    public $page;
    public $principal;
    public $pagina;
    public $menu;

    public function __construct() {
        $this->paginaModel = new Pagina();
        $this->principalModel = new Principal();
        $this->menuModel = new Menu();
        $this->get_client();
        
        $this->principal = $this->principalModel->getPrincipal(Session::get('client_id'));
        \View::share('principal', $this->principal);
    }
    
    public function get_client() {
        $url = url()->full();
        $parsedUrl = parse_url($url);
        $url = $parsedUrl['host'];
        $domain = new \App\Models\Dominio();
        $client_id = $domain->getClientByDomain($url);
        $domain_array = explode('.',$url);
        if (!empty($client_id)){
            Session::put('client_id',$client_id);
        }
        if (!empty($domain_array[0])){
            Session::put('subdomain',$domain_array[0]);
        }
    }
}
