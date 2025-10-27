<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Billboard extends Model
{
    protected $fillable = ['title', 'content', 'price'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
