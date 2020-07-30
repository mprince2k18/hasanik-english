<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //

    public function permissions(){
        return $this->hasMany(ModuleHasPermission::class,'module_id','id')->with('permission');
    }
}
