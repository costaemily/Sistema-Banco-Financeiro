<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_abertura',
        'saldo',
        'numero',
        'senha_cartao',
        'senha_internet',
        'taxa_juros',
        'limite_credito',
        'taxa_rendimento',
        'tipo_conta'
    ];


}