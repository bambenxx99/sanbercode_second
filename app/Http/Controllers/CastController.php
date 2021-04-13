<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CastController extends Controller
{
    public function create()
    {
        return view('cast.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $query = DB::table('cast')->insert([
            "name" => $request["castName"],
            "umur" => $request["castAge"]  
        ]);

        return redirected("/cast/create");
    }
}

