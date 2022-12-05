<?php

namespace App\Models\Relations;

use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasOne};

trait UserRelations
{
    /**
     * @return BelongsTo
     */
    public function role() : BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return HasOne
     */
    public function candidate() : HasOne
    {
        return $this->hasOne(Role::class);
    }
}