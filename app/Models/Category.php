<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, foreignKey:"category_id");
    }
}
