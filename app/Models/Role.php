<?php

namespace App\Models;

use App\Models\Relations\RoleRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, RoleRelations;

    /**
     * The attributes that are mass assignable.,
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'permissions'
    ];
}
