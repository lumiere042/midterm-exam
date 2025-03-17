<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class featureController extends Controller
{
    public function index()
    {
        $data = DB::table('features') -> get();

        // Pass the data to the view using the compact helper.
        return view('features')->with([
                    'categories' => $data
                   ]);
    }
}
