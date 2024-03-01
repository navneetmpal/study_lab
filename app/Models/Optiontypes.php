<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optiontypes extends Model
{
    use HasFactory;

    protected $fillable =['type'];

    public function img()
    {
        return $this->hasMany('App\Models\Tasks', 'type_id', 'id');
    }
}
