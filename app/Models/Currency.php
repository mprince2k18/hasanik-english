<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //
    public function scopePublished($query){
        return  $query->where('is_published', 1);
    }
}
