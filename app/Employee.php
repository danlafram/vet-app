<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = ['fname', 'lname', 'address', 'telephone', 'dob', 'sexe', 'nas', 'fonction', 'salary', 'clinicId'];
}
