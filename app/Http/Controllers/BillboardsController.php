<?php

namespace App\Http\Controllers;

use App\Models\Billboard;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BillboardsController extends Controller
{
    public function index()
    {
        $billboards = Billboard::latest()->get();

        return view('index', compact('billboards'));
    }

    public function detail(Billboard $billboard)
    {
        return view('detail', ['billboard' => $billboard]);
    }
}
