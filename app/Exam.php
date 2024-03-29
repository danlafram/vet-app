<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';

    protected $fillable = ['exam_date', 'description', 'examiner', 'animalId'];
}
