<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }
}
