<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{


    public function create_experience()
    {
          return view('BackOffice.create_experience');
    }
    public function store_experience(Request $req)
    {

        $experience=new Experience();
        $experience->title=$req->title;
        $experience->description=$req->description;
        $experience->company_name=$req->company_name;
        $experience->start_date=$req->start_date;
        $experience->end_date=$req->end_date;
        $experience->save();
        return back();


    }
}
