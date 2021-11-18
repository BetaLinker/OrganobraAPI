<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vistorias extends Model
{
    protected $table = 'vistorias';
    protected $primaryKey = 'idVistoria';

    protected $fillable = [
        'dataVistoria',
        'relatorio'
    ];

    public $timestamps = false;
 
}
