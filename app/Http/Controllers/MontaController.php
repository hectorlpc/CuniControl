<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MontaController extends Controller
{
    public function create()
    {
        return view('Monta.create');
    }

    public function edit()
    {
        return view('Monta.edit');
    }

    public function delete()
    {
        return view('Monta.delete');
    }
}
