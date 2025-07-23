<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
      protected $fillable = [
        'content_scheduling_at',
        'parent_id',
        'content',
        'name',
        'email',
        'username',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comments::class);
    }

    public function scheduling(): BelongsTo
    {
        return $this->belongsTo(ContentScheduling::class);
    }
}
