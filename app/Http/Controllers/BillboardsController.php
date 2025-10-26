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
        $resultString = "Объявления\r\n\r\n";
        foreach($billboards as $billboard){
            $resultString .= $billboard->title . "\r\n";
            $resultString .= $billboard->price . " руб.\r\n";
            $resultString .= "\r\n";
        }

        return response($resultString)->header('Content-Type', 'text/plain');
    }

    public function detail(Billboard $billboard)
    {
        $resultString = $billboard->title . "\r\n\r\n";
        $resultString .= $billboard->content . "\r\n";
        $resultString .= $billboard->price . " руб.\r\n";

        return response($resultString)->header('Content-Type', 'text/plain');
    }
}
