<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgenciaBancaria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'numero',
        'cnpj',
        'email',
        'numero_endereco',
        'numero_telefone'
    ];


}