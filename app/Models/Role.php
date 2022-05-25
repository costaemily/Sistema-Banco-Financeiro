<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';

    public $sortable = [ 
        'id', 
        'nome', 
    ];
   
    protected $fillable = [
    	'nome',
    	'descricao'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'user_roles')->withTimestamps();
    }

    public function role_permissao(){
        return $this->hasMany(RolePermissao::class,'role_id');
    }
}
