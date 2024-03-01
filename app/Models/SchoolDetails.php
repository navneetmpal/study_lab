<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Collection
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SchoolDetails extends Model
{
    use HasFactory;
    protected $fillable =['name', 'grade', 'medium', 'board', 'is_admission_open', 'address'];

    // public function schooladdress(){
    //     return $this->hasMany('App\Models\SchoolAddress', 'address_id','id');
    // }
}
