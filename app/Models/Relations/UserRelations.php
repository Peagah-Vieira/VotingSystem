<?php

namespace App\Models\Relations;

use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait UserRelations
{
    /**
     * @return BelongsTo
     */
    public function role() : BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}