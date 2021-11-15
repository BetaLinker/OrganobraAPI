<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietarios extends Model
{
    protected $table = 'proprietarios';
    protected $primaryKey = 'idProprietario';

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'celular',
        'telefone',
        'email'

    ];

    public $timestamps = false;

}
