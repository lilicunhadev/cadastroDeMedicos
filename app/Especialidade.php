<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    public $timestamps = false;
    protected $table = 'especialidades';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    protected $fillable = ['especialidade'];

}
