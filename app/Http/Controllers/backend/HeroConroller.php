<?php

namespace App\Http\Controllers\backend;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroConroller extends Controller
{
    //hero section edit page
    public function HeroSection() {
        $hero = Hero::find(1);
        return view('backend.hero.hero_section', compact('hero'));
    }

    //hero secton update store
    public function UpdateHeroSection(Request $request) {
        dd($request->all());
    }


}
