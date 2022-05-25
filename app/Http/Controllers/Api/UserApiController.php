<?php

namespace App\Http\Controllers\Api;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserApiController extends Controller{
    
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function buscaPaginada(Request $request){
        $page       = $request->get('page') ? $request->get('page') : 1;
        $pageSize   = $request->get('pageSize') ? $request->get('pageSize') : 5;
        $dir        = $request->get('dir') ? $request->get('dir') : 'asc';
        $props      = $request->get('props') ? $request->get('props') : 'id';
        $search     = $request->get('nome') ? $request->get('nome') : "";

        $dados = $this->userService->buscaPaginada($page, $pageSize, $dir, $props, $search);

        //dd($dados);

        /*return view('user.index', [
            'dados' => $dados['dados']
        ]);
        */
        return response() -> json($dados);
    }

    public function new(){
        return view('user.incluir');
    }

    public function create(Request $request){
        $data = $request->all();
        //dd($data);
        $mensagem = $this->userService->create($data);
        /*return([
            'success' => $mensagem['success'],
            view('user.index')
        ]);
        */
        return response()->json($mensagem);
    }

    public function store(Request $request, $id){
        $data = $request->all();
        $mensagem = $this->userService->store($data, $id);

        /*return redirect()->route('user.listar')
                          ->with('success', $mensagem['success']);
        */
        return response()->json($mensagem);
    }

    public function show($id){
        $registro = $this->userService->show($id);
        /*
        return view('user.alterar', [
            'registro' => $registro['registro'],
        ]);
        */
        return response()->json($registro);
    }

    public function cancelar(){
        //$registro = $this->userService->index();
        return redirect()->route('user.listar');
    }

    public function delete($id){
        $registro = $this->userService->delete($id);
        /*
        return view('user.excluir', [
            'registro' => $registro['registro'],
        ]);
        */
        return response()->json($registro);
    }

    public function excluir($id){
        $registro = $this->userService->excluir($id);
        //return redirect()->route('user.listar');
        return response()->json("Registro excluído com sucesso!");
    }
}