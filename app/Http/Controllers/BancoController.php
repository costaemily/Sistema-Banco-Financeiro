<?php

namespace App\Http\Controllers;

use App\Services\BancoService;
use Illuminate\Http\Request;

class BancoController extends Controller{
    
    private $bancoService;

    public function __construct(BancoService $bancoService)
    {
        $this->bancoService = $bancoService;
    }

    public function index(){

        $dados = $this->bancoService->index();

        //dd($dados);

        return view('banco.index', [
            'dados' => $dados['dados']
        ]);
    }

    public function new(){
        return view('banco.incluir');
    }

    public function create(Request $request){
        $data = $request->all();
        //dd($data);
        $mensagem = $this->bancoService->create($data);
        return([
            'success' => $mensagem['success'],
            view('banco.index')
        ]);
    }

    public function store(Request $request, $id){
        $data = $request->all();
        $mensagem = $this->bancoService->store($data, $id);

        return redirect()->route('banco.listar')
                          ->with('success', $mensagem['success']);
    }

    public function show($id){
        $registro = $this->bancoService->show($id);
        return view('banco.alterar', [
            'registro' => $registro['registro'],
        ]);
    }

    public function cancelar(){
        //$registro = $this->bancoService->index();
        return redirect()->route('banco.listar');
    }

    public function delete($id){
        $registro = $this->bancoService->delete($id);
        return view('banco.excluir', [
            'registro' => $registro['registro'],
        ]);
    }

    public function excluir($id){
        $registro = $this->bancoService->excluir($id);
        return redirect()->route('banco.listar');
    }
}
