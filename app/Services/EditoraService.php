<?php

namespace App\Services;

use App\Models\Editora;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EditoraService {

    private $repository;

    public function __construct(Editora $editora)
    {
        $this->repository = $editora;
    }

    public function index(){

        $dados = $this->repository->paginate(5);
        return ([
            'dados' => $dados
        ]);
    }

    public function buscaPaginada($page, $pageSize, $dir, $props, $search){

        if(empty($search)){
            $query = DB::table('editoras')->select('*')->orderBy($props, $dir);
        }else{
            $query = DB::table('editoras')->where($props, 'LIKE', '%'.$search.'%')->orderBy($props, $dir);
        }
        $total = $query->count();
        $registros = $query->offset(($page - 1) * $pageSize)->limit($pageSize)->get();
        return ([
            'registros' => $registros,
            'currentPage' => $page,
            'pageSize' => $pageSize,
            'lastPage' => ceil($total/$pageSize)
        ]);
    }
    public function create($data){
        //$data['data_cadastro'] = Carbon::createFromFormat('d/m/Y', $data['data_cadastro'])->format('Y-m-d');
        $this->repository->create($data);
        return([
            'success' => 'Registro Cadastrado com Sucesso!!!' 
        ]);
    }

    public function store($data, $id){
        $registro = $this->repository->find($id);
        $registro->update($data);
        return ([
            'success' => 'Registro alterado com sucesso'
        ]);
    }

    public function show($id){
        $registro = $this->repository->find($id);
        return([
            'registro' => $registro,
        ]);
    }

    public function delete($id){
        $registro = $this->repository->find($id);
        $registro->delete();
        return([
            'registro' => 'Registro excluido com sucesso',
        ]);
    }

    public function excluir($id){
        $registro = $this->repository->find($id);
        $registro->delete();
        return([
            'registro' => 'Registro excluido com sucesso',
        ]);
    }
}