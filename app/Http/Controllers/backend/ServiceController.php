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

    //store service
    public function storeService(Request $request) {
        // dd($request->all());

        $request->validate([
            'service_title'       => 'required',
            'service_description' => 'required',
        ]);

        Service::create([
            'service_title'       => $request->service_title,
            'service_description' => $request->service_description,
        ]);

        $notification = ([
            'message'    => 'Service Add Successully',
            'alert-type' => 'info'
        ]);

        return redirect()->route('all.serive')->with($notification);
    }
}
