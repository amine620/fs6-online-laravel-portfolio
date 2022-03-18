<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function create_award()
    {
        return view('BackOffice.create_award',['awards'=>Award::all()]);
    }
    public function store_award(Request $req)
    {
        $req->validate([
            'certificate_name'=>['required','max:100'],
            'certificate_provider'=>['required','max:100'],
            'certificate_link'=>['url'],
        ]);

        $award=new Award();
        $award->certificate_name=$req->certificate_name;
        $award->certificate_provider=$req->certificate_provider;
        $award->certificate_link=$req->certificate_link;
        $award->save();
        return back();

    }

    public function destroy_award($id)
    {
        Award::findOrFail($id)->delete();
        return back();
    }

    public function show_award($id)
    {
        return view('BackOffice.show_award',['award'=>Award::findOrFail($id)]);
    }

    public function update_award(Request $req,$id)
    {
        $req->validate([
            'certificate_name'=>['required','max:100'],
            'certificate_provider'=>['required','max:100'],
            'certificate_link'=>['url'],
        ]);

        $award=Award::findOrFail($id);
        $award->certificate_name=$req->certificate_name;
        $award->certificate_provider=$req->certificate_provider;
        $award->certificate_link=$req->certificate_link;
        $award->save();
        return back();
    }
}
