<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Session;

class MenusController extends Controller
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
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function show(Menus $menus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function edit(Menus $menus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menus $menus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menus $menus)
    {
        //
    }
    
    public function formatMenu($menus){
        $categoria='';
        $aberto='N';
        $menu_formatado ='';
        foreach($menus as $item){
            if ($item->categoria <> $categoria and $aberto=='S' ){
                $menu_formatado.=  "</ul></nav></li>";
                $aberto='N';
            }

	if ($item->opcao <>'' and $categoria <> $item->categoria){
            $categoria = $item->categoria;
            $aberto='S';
            $menu_formatado.= "<li class=classic>
            <a href='javascript:;'>
                $categoria
              </a>
            <nav class='classic'>
              <span class='arrow'></span>
              <ul>";        
	}
	
	$categoria = $item->categoria;
	$opcao = $item->opcao;
	if ($opcao==''){$opcao=$categoria;}
	$link = $item->link;
	$destinolink = $item->destinolink;
	$menu_formatado.= "<li><a href=$link target=$destinolink> $opcao </a></li>";
        
        }
        return $menu_formatado;   
    }
}
