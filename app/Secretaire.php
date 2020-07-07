<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    //
    protected $fillable = ['nom','prenom','addresse','codepostal','ville','telfixe','telmobile',
    'mail','Docteur_id'];
}
