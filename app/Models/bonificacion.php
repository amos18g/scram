<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bonificacion extends Model
{
    use HasFactory;

    protected $table = 'bonificacion';

    public $timestamps = false;

    public $primaryKey = 'idBonificacion';
}
