<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['full_name','age','course','address','phone_no','gender' ];


}
