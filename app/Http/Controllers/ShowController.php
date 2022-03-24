<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShowController extends Controller
{
    public function show()
    {
        $experiences=Cache::remember("experiences",60,function(){
            return Experience::all();
        });

        $educations=  Cache::remember('educations',60,function(){
             return Education::all();
        });
      
        $interests=Cache::remember('interests',60,function(){
           return  Interest::all();
        });

        $awards=Cache::remember('awards',60,function(){
           return Award::all();
        });

        $projects=Cache::remember('projects',60,function(){
            return Project::all();
        });

        $profile=Cache::remember('profile',60,function(){
            return Profile::first();
        });
        
        return view('FrontOffice.welcome',[
            "experiences"=>$experiences,
            "educations"=>$educations,
            "interests"=>$interests,
            "awards"=>$awards,
            "profile"=>$profile,
            "projects"=>$projects,
        ]);
    }
}
