<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'candidatos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'sobrenome',
        'estado',
        'filiação',
        'número',
        'situação'
    ];
}
