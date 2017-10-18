<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conejo;

class MontaController extends Controller
{
    public function create()
    {
        $conejos=Conejo::all();
        return view('Monta/create',["conejos"=>$conejos]);
    }

    public function edit($id_monta)
    {
        return view('Monta/edit');
    }

    public function delete($id_monta)
    {
        return redirect()->back();
    }
}
