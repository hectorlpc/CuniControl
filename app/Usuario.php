<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
		public $incrementing = false;
    protected $table = 'Usuario';
    protected $primaryKey = 'CURP';
}
