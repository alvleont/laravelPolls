<?php

namespace App\Models;

use Kreait\Firebase\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
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
