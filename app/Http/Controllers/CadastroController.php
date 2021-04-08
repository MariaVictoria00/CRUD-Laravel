<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Cadastro::all();
        return view('cadastro.index')->with('cadastros',$cadastros );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastros = new Cadastro();

        $cadastros-> nome = $request -> get('nome');
        $cadastros-> endereco = $request -> get('endereco');
        $cadastros-> bairro = $request -> get('bairro');
        $cadastros-> municipio = $request -> get('municipio');
        $cadastros-> estado = $request -> get('estado');
        $cadastros-> cep = $request -> get('cep');
        $cadastros-> telefone = $request -> get('telefone');

        $cadastros->save();

        return redirect('/cadastros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro = Cadastro::find($id);
        return view('cadastro.edit')-> with('cadastro', $cadastro);
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
        $cadastro = Cadastro::find($id);

        $cadastro-> nome = $request -> get('nome');
        $cadastro-> endereco = $request -> get('endereco');
        $cadastro-> bairro = $request -> get('bairro');
        $cadastro-> municipio = $request -> get('municipio');
        $cadastro-> estado = $request -> get('estado');
        $cadastro-> cep = $request -> get('cep');
        $cadastro-> telefone = $request -> get('telefone');

        $cadastro->save();

        return redirect('/cadastros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastro = Cadastro::find($id);
        $cadastro->delete();
        return redirect('/cadastros');
    }
}
