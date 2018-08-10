<?php

namespace App\Http\Controllers;
use Storage;

use Illuminate\Http\Request;

class BandeirasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($index)
    {
        // Checo se a sessão existe, caso não, crio uma.
        if(!isset($_SESSION)){
            session_start(); // Inicia a sessão
        }


        // Se é a primeira vez que abro o app, recupero os dados do meu JSON
        if($index == 0 ){
            $conteudo =  Storage::get('public/bandeiras.json');
            $bandeiras = json_decode($conteudo, true);
            $_SESSION['bandeiras'] = shuffle($bandeiras['dados-bandeiras']);
            $data = [
                'bandeiras' => $bandeiras['dados-bandeiras']
            ];
        }else{
            // Se não recupero os dados da minha sessão
            $data = [
                'bandeiras' => $restantes,
                'dadosSessao' => $_SESSION
            ];
        }
        /**
         * A partir dos dados da sessão eu utilizaria um contator, 
         * onde o enviaria para o meu botão na view, indicando a próxima pergunta.
         * Dentro da sessão eu também manteria os dados dos arrays de bandeiras,
         *  que sofreriam um "shuffle" toda vez que esse método fosse chamado, e o mesmo
         * seria retornado para a view, sempre numa ordem diferente da anterior.
         */
        return view('quiz', $data);
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
