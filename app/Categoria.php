<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id';

    public $timestamps = true;
    protected $fillable = [

    'nome',
    'descricao',
    'condicao'

    ];

    protected $guarded = [];
}
