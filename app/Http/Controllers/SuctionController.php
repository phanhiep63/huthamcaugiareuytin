<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuctionController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        return view('suction');
    }
}
