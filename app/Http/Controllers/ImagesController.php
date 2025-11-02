<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Str;

class ImagesController extends Controller
{
    public function store(Request $request){
        $image = new Image($request->all());
        $image->name = Str::uuid() . '.' . $request->file('image')->extension(); //unique name for every image
        $image->user_id = auth()->user()->id;
        $image->save();
        return redirect()->route('home');
    }
}
