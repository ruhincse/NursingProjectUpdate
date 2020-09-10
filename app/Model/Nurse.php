<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $fillable=['name','mobile','photo','father_name','mother_name','dob','maritual_status','gender','nationality','religion','permanent_address'	,'present_address','refer_name','salary'];


    
}
