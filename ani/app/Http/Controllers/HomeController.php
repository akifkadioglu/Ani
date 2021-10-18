<?php

namespace App\Http\Controllers;

use App\Models\Remembrance;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = Remembrance::orderBy('created_at', 'desc')->limit(50)->get();

        // $data = Remembrance::inRandomOrder()->limit(20)->get();
        return view("home", ["data" => $data]);
    }
}
