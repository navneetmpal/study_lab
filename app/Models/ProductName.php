<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductName extends Model
{
    use HasFactory;
    protected $fillable =['product_name', 'user_id'];

    // public function user_product()
    // {
    //     return $this->hasMany('App\Models\User', 'user_id', 'id');
    // }
}
