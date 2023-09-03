<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Artist extends Model
{
    use HasFactory;

    public function musicalGenres(): BelongsToMany
    {
        return $this->belongsToMany(MusicalGenre::class)
            ->using(ArtistMusicalGenre::class)
            ->withTimestamps();
    }

    public function socialNetworks(): BelongsToMany
    {
        return $this->belongsToMany(SocialNetwork::class)
            ->using(ArtistSocialNetwork::class)
            ->withTimestamps()
            ->withPivot('url');
    }

    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }

    public function concerts(): HasMany
    {
        return $this->hasMany(Concert::class);
    }

    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class);
    }

    public function songs(): HasMany
    {
        return $this->hasMany(Song::class);
    }
    
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
