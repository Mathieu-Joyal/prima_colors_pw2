<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    public function index()
    {
        $forfaits = Forfait::all();

        return view('forfaits.index',[
            "forfaits" =>$forfaits,
        ]);

    }
}
