<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = produto::all();
        return view('produtos_lista', ['produtos' => $dados]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos_form', ['acao' => 1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        $prod = produto::create($dados);

        if($prod) {
            return redirect()->route('produtos.index')->with('status', 'Produto' . $request->nome . 
            '. Produto inserido com sucesso!');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reg = produto::find($id);

        return view('produtos_form', ['reg' => $reg, 'acao' => 2]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg = produto::find($id);

        return view('produtos_form', ['reg' => $reg, 'acao' => 3]);
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
        //Posiciona no registro a ser alterado
        $reg = produto::find($id);

        //Obtém todos os campos do formulário
        $dados = $request->all();

        //Solicita a alteração do Registro
        $prod = $reg->update($dados);
        
        // se alterou
        if($prod) {
            return redirect()->route('produtos.index')->with('status', 'Produto' . $request->nome . 
            '. Produto inserido com sucesso!!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = produto::find($id);

        if($reg->delete()){
        return redirect()->route('produtos.index')->with('status', 'Produto ' . $reg->nome . ' Excluído corretamente');
        }
    }
}
