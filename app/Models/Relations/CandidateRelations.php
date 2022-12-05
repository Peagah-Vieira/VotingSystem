<?php

namespace App\Models\Relations;

use App\Models\{User, Party};
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait CandidateRelations
{
    /**
     * @return BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function party() : BelongsTo
    {
        return $this->belongsTo(Party::class);
    }
}