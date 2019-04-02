<?php

namespace contatoRapido\Http\Controllers;

use contatoRapido\Models\Imovel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Imovel::all();
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \contatoRapido\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show(Imovel $imovel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \contatoRapido\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit(Imovel $imovel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \contatoRapido\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imovel $imovel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \contatoRapido\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imovel $imovel)
    {
        //
    }

    public function cidadeAjax(Request $request)
    {
        $data = $request->all();
        $cidades = DB::table('cidade')->where('estado', '=', $data['estado_id'])->orderBy('nome', 'asc')->get()->toJson();
        return $cidades;
    }
}
