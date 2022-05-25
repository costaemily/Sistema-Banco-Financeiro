@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="app-title">
            <h1>
                <i class="fa fa-edit">Exclusão de Dados do Banco</i>
            </h1>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
                <li class="breadcrumb-item">Pesquisa</li>
            </ul>
        </div>
        <div class="tile">
            <div class="tile-body">
                <form action="{{url('/banco/excluir', $registro->id)}}" method="POST">
                    @csrf
                    @include('banco.__form')
                    <div class="center">
                        <button type="submit" class="btn btn-danger btn-lg">Salvar Exclusão dos Dados do Banco</button>
                        <a class="btn btn-secondary btn-lg" href="{{url('/banco/cancelar')}}">Cancelar Exclusão do Banco</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection