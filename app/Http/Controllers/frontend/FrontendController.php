<?php

namespace App\Http\Controllers\frontend;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    //frontend home page
    public function homepage() {
        return view('frontend.homepage');
    }
}
