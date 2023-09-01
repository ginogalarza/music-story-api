<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;

    public function concerts(): BelongsToMany
    {
        return $this->belongsToMany(Concert::class)
            ->withTimestamps()
            ->using(ConcertSong::class);
    }

    public function artists(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class)
            ->withTimestamps()
            ->using(ArtistSong::class);
    }

    public function albums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class)
            ->withTimestamps()
            ->using(AlbumSong::class);
    }
}
