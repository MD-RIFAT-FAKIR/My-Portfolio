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
    }
}
