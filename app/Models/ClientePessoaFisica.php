<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientePessoaFisica extends Model
{
    use HasFactory;

    protected $fillable = [
        'primeiro_nome',
        'segundo_nome',
        'ultimo_nome',
        'rg',
        'cpf',
        'data_nascimento',
        'genero'
    ];


}