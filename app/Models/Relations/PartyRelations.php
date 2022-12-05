<?php

namespace App\Models\Relations;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait PartyRelations
{
    /**
     * @return HasMany
     */
    public function candidates() : HasMany
    {
        return $this->belongsTo(Candidate::class);
    }
}