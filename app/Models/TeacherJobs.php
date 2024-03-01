<?php

namespace App\Models;


// use Illuminate\Database\Eloquent\Collection
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherJobs extends Model
{
    use HasFactory;
    protected $fillable =['school_name', 'sub_name', 'grade', 'medium', 'board', 'address'];
}
