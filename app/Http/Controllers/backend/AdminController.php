<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //admin logout
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect('/login')->with('status', 'Admin Logout Successfully !');
    }//end method


    //admin edit profile
    public function AdminEditProfile() {
        $admin = User::find(Auth::user()->id);
        return view('admin.pages.edit_profile', compact('admin'));
    }//end method

    //admin update profile
    public function AdminUpdateProfile(Request $request) {
        // dd($request->all());

        $id = Auth::user()->id;
        $admin = User::findOrFail($id);
        
        if(!empty($request->file('photo'))) {
            $file = $request->file('photo');
            $fileName = 'admin_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/admin'),$fileName);
            $filePath = 'uploads/admin/'.$fileName;
            
            if($admin->photo && file_exists(public_path($admin->photo))) {
                unlink(public_path($admin->photo));
            }

            $admin->update([
                'username' => $request->username,
                'email'    => $request->email,
                'photo'    => $filePath,
            ]);

            $notification = ([
                'message'    => 'Profile Update With Photo Successfully.',
                'alert-type' => 'info',
            ]);

            return redirect()->back()->with($notification);

        }else{

            $admin->update([
                'username' => $request->username,
                'email'    => $request->email,
            ]);

            $notification = ([
                'message'    => 'Profile Update Without Photo Successfully.',
                'alert-type' => 'info',
            ]);

            return redirect()->back()->with($notification);
        }
    }//end method
}
