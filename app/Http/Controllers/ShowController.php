<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $experiences=Experience::all();
        $educations=Education::all();
        $interests=Interest::all();
        $awards=Award::all();
        
        return view('FrontOffice.welcome',[
            "experiences"=>$experiences,
            "educations"=>$educations,
            "interests"=>$interests,
            "awards"=>$awards,
        ]);
    }
}
