<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'crm',
        'telefone',
        'especialidade1',
        'especialidade2',
        'especialidade3',
    ];
}
