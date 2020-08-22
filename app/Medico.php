<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeSearchFilter(Builder $query, $filter = null, $search = null)
    {
        if ($filter === null || $search === null) {
            return $query;
        }

        return $query->where($filter, 'like', "%{$search}%")->orderBy($filter);
    }
}
