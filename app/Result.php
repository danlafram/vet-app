<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'results';

    protected $fillable = ['treatment_quanitity', 'start_date', 'end_date', 'examNo', 'animalNo', 'treatmentNo'];
}
