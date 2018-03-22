<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = array('nome', 'marca', 'quant', 'preco');

    //indica que esta model (tabela produtos) não utiliza os campos
    //created_at e updated_at
    public $timestamps = false;

}
