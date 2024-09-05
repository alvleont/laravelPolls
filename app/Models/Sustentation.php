<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sustentation extends Model
{
    use HasFactory;

    protected $fillable = [
        'Document ID',
        'campus',
        'email',
        'genre',
        'idInstitucional',
        'name',
        'numcelular',
        'numeroDocumento',
        'program',
        'role',
        'tipoDocumento',
        'uid'
    ];
}
