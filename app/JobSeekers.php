<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeekers extends Model
{
    protected $table = 'jobseekers';
    protected $fillable = ['name', 'placebirth', 'idnumber', 'phonenumber', 'religion', 'email', 'datebirth', 'currentaddress', 'latestdegree', 'contracttype', 'jobexperience', 'latestdegreecert', 'availabledate', 'jobinterest'];
}
