<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';

    protected $fillable = ['name', 'type', 'description', 'dob', 'dateInscription', 'animal_state', 'ownerId'];
}
