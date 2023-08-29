<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;

    public function musicalGenres(): BelongsToMany
    {
        return $this->belongsToMany(MusicalGenre::class)
            ->using(ArtistMusicalGenre::class)
            ->withTimestamps();
    }
}
