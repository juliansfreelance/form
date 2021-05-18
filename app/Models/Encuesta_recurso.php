<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta_recurso extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_encuesta_recurso';
    public $timestamps = false;
}
