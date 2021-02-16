<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekers extends Model
{
    protected $table = 'jobseekers';
    protected $fillable = ['name', 'placebirth', 'idnumber', 'profilephoto', 'phonenumber', 'religion', 'email', 'datebirth', 'idphoto' , 'currentaddress', 'latestdegree', 'contracttype', 'jobexperience', 'latestdegreecert', 'availabledate', 'jobinterest'];
}
