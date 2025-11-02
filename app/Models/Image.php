<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'billboard_id'];
    
    public function billboard()
    {
        return $this->belongsTo(Billboard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function store(Image $image){
        $image->save();
    }

    public function getPath(){
        return 'images/' . $this->name;
    }
}
