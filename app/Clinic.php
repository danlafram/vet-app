<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = 'clinics';

    protected $fillable = ['name', 'address', 'telephone', 'telecopier', 'gestionnaireId'];
}
