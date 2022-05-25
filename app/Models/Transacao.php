<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'data',
        'quantia',
        'idTerminal',
        'tipoTransacao'
    ];


}