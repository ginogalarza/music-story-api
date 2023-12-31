<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Song extends Model
{
    use HasFactory;

    public function concerts(): BelongsToMany
    {
        return $this->belongsToMany(Concert::class)
            ->withTimestamps()
            ->using(ConcertSong::class);
    }

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class)
            ->withTimestamps()
            ->using(AlbumSong::class);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
