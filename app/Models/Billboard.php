<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Billboard extends Model
{
    protected $fillable = ['title', 'content', 'price'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function images() : HasMany
    {
        return $this->hasMany(Image::class, 'billboard_id', 'id');
    }
}
