<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    /**
     * Get movie`s categories
     * @return HasMany
     */
    public function categories()
    {
        //@TODO: must see how to do join
        return $this->hasMany(MovieCategory::class, 'id', 'movie_category_id');
    }
}
