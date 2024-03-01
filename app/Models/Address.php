<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable =['address'];
    
    // public function schooladdress(){
    //     return $this->hasMany('App\Models\SchoolDetails', 'address_id','id');
    // }
}
