<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;


class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticias::orderby('created_at', 'desc')->take(50)->get();
        //dd($noticias);
        return response()->json($noticias);
    }
}
