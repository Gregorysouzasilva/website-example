<?php

namespace App\Http\Controllers;

use App\Models\Estrutura;
use Illuminate\Http\Request;
use Session;


class EstruturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Estrutura  $estrutura
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        $client = Session::get('client_id');
        if (empty($client)){
            return FALSE;
        }
        $estrutura = Estrutura::Where('pagina', 'like', '%' . $page . '%')
                ->whereOr('pagina', 'like', '%Todos%')
                ->where('cliente', $client)
                ->orderBy('ordem')
                ->get();
        return $estrutura;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estrutura  $estrutura
     * @return \Illuminate\Http\Response
     */
    public function edit(Estrutura $estrutura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estrutura  $estrutura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estrutura $estrutura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estrutura  $estrutura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estrutura $estrutura)
    {
        //
    }
}
