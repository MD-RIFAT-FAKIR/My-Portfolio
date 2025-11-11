<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //all service page
    public function allService() {
        $services = Service::orderBy('created_at','DESC')->get();
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
            'message'    => 'Service Added Successully',
            'alert-type' => 'info'
        ]);

        return redirect()->route('all.service')->with($notification);

    }//end store service 



    //edit services
    public function editService($id) {
       $service = Service::findOrFail($id);
       return view('backend.service.edit_service', compact('service'));
    }


    //update service
    public function updateService(Request $request, $id) {

        $request->validate([
            'service_title'       => 'required',
            'service_description' => 'required',
        ]);

        Service::where('id', $id)->update([
            'service_title'       => $request->service_title,
            'service_description' => $request->service_description
        ]);

        $notification = ([
            'message'    => 'Service Updated Successfully',
            'alert-type' => 'success'
        ]);


        return redirect()->route('all.service')->with($notification);


    }//end update service




    //delete service
    public function deleteService($id) {
        Service::findOrFail($id)->delete();

         $notification = ([
            'message'    => 'Service Deleted Successfully',
            'alert-type' => 'error'
        ]);

        return redirect()->back()->with($notification);
    }



}
