<?php

namespace App\Services;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class RoleService {

    private $repository;

    public function __construct(Role $role, ConsoleOutput $out)
    {
        $this->repository = $role;
        $this->out = $out;
    }

    public function index(){

        $dados = $this->repository->paginate(5);
        return ([
            'dados' => $dados
        ]);
    }

    public function buscaPaginada($page, $pageSize, $dir, $props, $search){

        if(empty($search)){
            $query = DB::table('roles')->select('*')->orderBy($props, $dir);
        }else{
            $query = DB::table('roles')->where($props, 'LIKE', '%'.$search.'%')->orderBy($props, $dir);
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