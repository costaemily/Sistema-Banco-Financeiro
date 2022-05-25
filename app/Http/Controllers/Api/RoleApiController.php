<?php

namespace App\Http\Controllers\Api;

use App\Services\RoleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleApiController extends Controller{
    
    private $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function buscaPaginada(Request $request){
        $page       = $request->get('page') ? $request->get('page') : 1;
        $pageSize   = $request->get('pageSize') ? $request->get('pageSize') : 5;
        $dir        = $request->get('dir') ? $request->get('dir') : 'asc';
        $props      = $request->get('props') ? $request->get('props') : 'id';
        $search     = $request->get('nome') ? $request->get('nome') : "";

        $dados = $this->roleService->buscaPaginada($page, $pageSize, $dir, $props, $search);

        //dd($dados);

        /*return view('role.index', [
            'dados' => $dados['dados']
        ]);
        */
        return response() -> json($dados);
    }

    public function new(){
        return view('role.incluir');
    }

    public function create(Request $request){
        $data = $request->all();
        //dd($data);
        $mensagem = $this->roleService->create($data);
        /*return([
            'success' => $mensagem['success'],
            view('role.index')
        ]);
        */
        return response()->json($mensagem);
    }

    public function store(Request $request, $id){
        $data = $request->all();
        $mensagem = $this->roleService->store($data, $id);

        /*return redirect()->route('role.listar')
                          ->with('success', $mensagem['success']);
        */
        return response()->json($mensagem);
    }

    public function show($id){
        $registro = $this->roleService->show($id);
        /*
        return view('role.alterar', [
            'registro' => $registro['registro'],
        ]);
        */
        return response()->json($registro);
    }

    public function cancelar(){
        //$registro = $this->roleService->index();
        return redirect()->route('role.listar');
    }

    public function delete($id){
        $registro = $this->roleService->delete($id);
        /*
        return view('role.excluir', [
            'registro' => $registro['registro'],
        ]);
        */
        return response()->json($registro);
    }

    public function excluir($id){
        $registro = $this->roleService->excluir($id);
        //return redirect()->route('role.listar');
        return response()->json("Registro excluído com sucesso!");
    }
}