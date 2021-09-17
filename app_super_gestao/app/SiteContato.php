<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Site_Contato

class SiteContato extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
