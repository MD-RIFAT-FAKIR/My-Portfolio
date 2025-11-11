<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //all service page
    public function allService() {
        $services = Service::all();
        return view('backend.service.all_service', compact('services'));
    }
    
    //add service
    public function addService() {
        return view('backend.service.add_service');
    }
}
