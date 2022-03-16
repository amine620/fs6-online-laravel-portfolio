<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function create_education()
    {
        return view('BackOffice.create_education',['educations'=>Education::all()]);
    }

    public function store_education(EducationRequest $req)
    {
        $education=new Education();
        $education->school_name=$req->school_name;
        $education->degree=$req->degree;
        $education->matter=$req->matter;
        $education->start_date=$req->start_date;
        $education->end_date=$req->end_date;
        $education->save();
        return back();
    }

    public function destroy_education($id)
    {
       Education::findOrFail($id)->delete();
       return back();
    }

    public function show_education($id)
    {
       return view('BackOffice.show_education',['education'=>Education::findOrFail($id)]);
    }

    public function update_education(EducationRequest $req,$id)
    {
        $education=Education::findOrFail($id);
        $education->school_name=$req->school_name;
        $education->degree=$req->degree;
        $education->matter=$req->matter;
        $education->start_date=$req->start_date;
        $education->end_date=$req->end_date;
        $education->save();
        return back();
    }
}
