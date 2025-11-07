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

    //resume download 
    public function resumeDownload() {
        $hero = Hero::find(1);
        $file = $hero->resume;

        if(file_exists(public_path($file))) {
            return response()->download($file);
        }else{
            return redirect()->back()->with('error', 'Resume Not Found !');
        }
        
    }
}
