<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedors';
    protected $fillable = ['name','email','produto','UF'];
}
