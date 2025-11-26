<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function addRecentWork() {
        $services = Service::latest()->get();
        return view('backend.recent_work.add_recent_work', compact('services'));
    }
}
