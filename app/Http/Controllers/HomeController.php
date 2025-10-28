<?php

namespace App\Http\Controllers;

use App\Models\Billboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['billboards' => Auth::user()->billboards]);
    }

/**
 * Show the create form for a billboard.
 *
 * @return \Illuminate\Contracts\View\View
 */
    public function create()
    {
        return view('billboard-create');
    }

    /**
     * Store a new billboard.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Auth::user()->billboards()->create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
        ]);
        return redirect()->route('home');
    }

    public function edit(Billboard $billboard) {
        return view('billboard-edit', compact('billboard'));
    }

    public function update(Request $request, Billboard $billboard) {
        $billboard->update([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
        ]);
        return redirect()->route('home');
    }

    public function delete(Billboard $billboard) {
        return view('billboard-delete', compact('billboard'));
    }

    public function destroy(Billboard $billboard) {
        $billboard->delete();
        return redirect()->route('home');
    }
}
