<?php

namespace App\Http\Controllers\backend;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroConroller extends Controller
{
    //
    public function HeroSection() {
        $hero = Hero::find(1);
        return view('backend.hero.hero_section', compact('hero'));
    }
}
