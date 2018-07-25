<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $table = 'categoria';
  protected $primarykey = 'idcategoria';

  public $timestamps = false;
  protected $fillable = [ 'nome', 'descricao', 'condicao' ];

  protected $guarded[];
}
