<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrgSetting extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['pre_loader'];
}
