<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuPermitido extends Model
{
    //

    protected $table =['usu_permitidos'];
    protected $fillable = [
        'id', 'nombreUsu', 'permiso',
    ];

    public function hasPermiso(){
        return $this->permiso;
    }
}
