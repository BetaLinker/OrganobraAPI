<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\Cast\Double;

class Obras extends Model
{
    protected $table = "obras";
    protected $primaryKey = 'idObra';

    protected $fillable = [
        'endereco',
        'area',
        'tipo',
        'alvara',
        'habite_se',
        'entregue',
        'data_lancamento',
        'idVistoria'
    ];

    public $timestamps = false;

}
