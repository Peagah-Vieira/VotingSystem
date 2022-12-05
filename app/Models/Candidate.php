<?php

namespace App\Models;

use Exception;
use App\Models\Relations\CandidateRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory, CandidateRelations;
}
