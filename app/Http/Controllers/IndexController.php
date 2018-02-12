<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\EstruturaController;
use App\Http\Controllers\MenusController;
use App\Models\Estrutura;
use App\Models\Itens;
use Session;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page, Request $request)
    {
        
        $this->page = $request->path();
        if (empty($this->page)){
            $this->page = 'home';
        }
        
        if (Cache::has(Session::get('client_id') . $page)) {
            $data = Cache::get(Session::get('client_id') . $page);
            return \view('index', $data);
            
        }
        
        if ($this->page == 'noticias'){
            
        } else {
            $data['pagina'] = $this->paginaModel->getPage($this->page, Session::get('client_id'));
        }

        if (empty($data['pagina'])) {
            //return abort(404);
        }
        
        // checa se pagina é restrita
        if (!empty($data['pagina']) && ($data['pagina']->somentecadastrados == 'S' or $data['pagina']->somentepropriousuario == 'S')){
            if (!Session::has('user')){
                return redirect('/login');
            }
        }
        
        // carrega menu
        $menu_data = $this->menuModel->getMenu(Session::get('client_id'));
        $data['menu_itens'] = (new MenusController)->formatMenu($menu_data);
        
        // carrega banner
        $data['banner'] = (new \App\Models\Banner)->getBanner($page, Session::get('client_id'));

        $estruturaModel = new Estrutura();
        $data['estruturas'] = $estruturaModel->getEstrutura($page, Session::get('client_id'));
        $data['slider'] = 0;
        Cache::put(Session::get('client_id') . $page, $data, 60);
        
        return \view('index', $data);
    }
    
    public function indexId($page, $id, Request $request)
    {
        //$data['principal'] = ;
        $itens = new ItensController();
        $itens_dados = $itens->show($page, $id);
        $data['item'] = $itens_dados;
        dd($data);
        return \view('index', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
