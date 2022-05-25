<?php

namespace App\Http\Controllers;

use App\Services\EditoraService;
use Illuminate\Http\Request;

class EditoraController extends Controller{
    
    private $editoraService;

    public function __construct(EditoraService $editoraService)
    {
        $this->editoraService = $editoraService;
    }

    public function index(){

        $dados = $this->editoraService->index();

        //dd($dados);

        return view('editora.index', [
            'dados' => $dados['dados']
        ]);
        
        //return response() -> json($dados);
    }

    public function new(){
        return view('editora.incluir');
    }

    public function create(Request $request){
        $data = $request->all();
        //dd($data);
        $mensagem = $this->editoraService->create($data);
        /*return([
            'success' => $mensagem['success'],
            view('editora.index')
        ]);
        */
        return response()->json($mensagem);
    }

    public function store(Request $request, $id){
        $data = $request->all();
        $mensagem = $this->editoraService->store($data, $id);

        /*return redirect()->route('editora.listar')
                          ->with('success', $mensagem['success']);
        */
        return response()->json($mensagem);
    }

    public function show($id){
        $registro = $this->editoraService->show($id);
        /*
        return view('editora.alterar', [
            'registro' => $registro['registro'],
        ]);
        */
        return response()->json($registro);
    }

    public function cancelar(){
        //$registro = $this->editoraService->index();
        return redirect()->route('editora.listar');
    }

    public function delete($id){
        $registro = $this->editoraService->delete($id);
        /*
        return view('editora.excluir', [
            'registro' => $registro['registro'],
        ]);
        */
        return response()->json($registro);
    }

    public function excluir($id){
        $registro = $this->editoraService->excluir($id);
        //return redirect()->route('editora.listar');
        return response()->json($registro);
    }
}
