<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'senha',
        'nome',
        'sobrenome',
        'telefone',
        'estado',
    ];
}
