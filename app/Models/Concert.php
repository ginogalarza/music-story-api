<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Concert extends Model
{
    use HasFactory;

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class)
            ->using(ConcertSong::class)
            ->withTimestamps();
    }
}
