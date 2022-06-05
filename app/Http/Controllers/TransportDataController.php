<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportDataController extends Controller
{
    public function index()
    {
        return view('transport_data.index');
    }

    public function show($eco)
    {
        return view('transport_data.show', compact('eco'));
    }

    public function create()
    {
        return view('transport_data.create');
    }
}
