<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Footer;
use Illuminate\Http\Request;

class BurgersController extends Controller
{
    public function home() {
        $foods = Food::all();
        $footers = Footer::all();
        return view('welcome', compact('footers', 'foods'));
    }
}
