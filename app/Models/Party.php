<?php

namespace App\Models;

use App\Models\Relations\PartyRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory, PartyRelations;
}
