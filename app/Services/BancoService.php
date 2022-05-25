<?php

namespace App\Services;

use App\Models\Banco;
use Carbon\Carbon;

class BancoService {

    private $repository;

    public function __construct(Banco $banco)
    {
        $this->repository = $banco;
    }

    public function index(){

        $dados = $this->repository->all();
        return ([
            'dados' => $dados
        ]);
    }

    public function create($data){
        //$data['data_cadastro'] = Carbon::createFromFormat('d/m/Y', $data['data_cadastro'])->format('Y-m-d');
        $this->repository->create($data);
        //$
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
        return([
            'registro' => $registro,
        ]);
    }

    public function excluir($id){
        $registro = $this->repository->find($id);
        $registro->delete();
    }
}