<?php

namespace App\Http\Controllers\backend;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class HeroConroller extends Controller
{
    //hero section edit page
    public function HeroSection() {
        $hero = Hero::find(1);
        return view('backend.hero.hero_section', compact('hero'));
    }

    //hero secton update store
    public function UpdateHeroSection(Request $request) {

        $hero = Hero::find(1);

        //when photo file selectd 
        if(!empty($request->file('photo'))) {

            if(!empty($hero->photo && public_path($hero->photo))) { // replase old by new one
                unlink(public_path($hero->photo));
            }
            
           
            
            $file = $request->file('photo');
            $fileName = 'hero_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);
            $img->resize(437, 475);
            $img->toJpeg(80)->save(base_path('public/uploads/hero/'.$fileName));
            $savePath = 'uploads/hero/'.$fileName;

            Hero::find(1)->update([
                'name'        => $request->name,
                'profession'  => $request->profession,
                'photo'       => $savePath,
                'short_desc'  => $request->short_desc,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url,
                'linkdin_url' => $request->linkdin_url,
                'github_url'  => $request->github_url,
                'YOE'         => $request->YOE,
                'PC'          => $request->PC,
                'HC'          => $request->HC,
                'updated_at'  => Carbon::now(),
            ]);

            $notification = ([
                'message'    => 'Hero-section Update with Photo Successfully',
                'alert-type' => 'success'
            ]);

            if(empty($request->file['resume'])) {
                return redirect()->back()->with($notification);
            }


        //when resume file selected
        }elseif(!empty($request->file('resume'))) {

            if(!empty($hero->resume && public_path($hero->resume))) { //replace old by new one
                unlink(public_path($hero->resume));
            }

            $file = $request->file('resume');
            $fileName = 'resume_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/resume/'),$fileName);
            $savePath = 'uploads/resume/'.$fileName;

            Hero::find(1)->update([
                'name'        => $request->name,
                'profession'  => $request->profession,
                'resume'       => $savePath,
                'short_desc'  => $request->short_desc,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url,
                'linkdin_url' => $request->linkdin_url,
                'github_url'  => $request->github_url,
                'YOE'         => $request->YOE,
                'PC'          => $request->PC,
                'HC'          => $request->HC,
                'updated_at'  => Carbon::now(),
            ]);

            $notification = ([
                'message'    => 'Hero-section Update with Resume Successfully',
                'alert-type' => 'success'
            ]);

            return redirect()->back()->with($notification);

        }

            //when photo and resume both file are not selected
            Hero::find(1)->update([
                'name'        => $request->name,
                'profession'  => $request->profession,
                'short_desc'  => $request->short_desc,
                'twitter_url' => $request->twitter_url,
                'youtube_url' => $request->youtube_url,
                'linkdin_url' => $request->linkdin_url,
                'github_url'  => $request->github_url,
                'YOE'         => $request->YOE,
                'PC'          => $request->PC,
                'HC'          => $request->HC,
                'updated_at'  => Carbon::now(),
                ]);

                $notification = ([
                    'message'    => 'Hero-section Update without Photo and Resume Successfully',
                    'alert-type' => 'success'
                ]);

                return redirect()->back()->with($notification);
        
    }//end hero secton update store


}
