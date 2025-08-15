<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function aics()
    {
        return view('public.services.aics');
    }

    public function osca()
    {
        return view('public.services.osca');
    }

    public function pdao()
    {
        return view('public.services.pdao');
    }

    public function soloParent()
    {
        return view('public.services.solo-parent');
    }

    public function livelihood()
    {
        return view('public.services.livelihood');
    }
}
