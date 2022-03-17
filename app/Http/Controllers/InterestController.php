<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function create_interest()
    {
    
        return view('BackOffice.create_interest',['interests'=>Interest::all()]);
    }

    public function store_interest(Request $req)
    {
        $req->validate([
            'content'=>'required|max:1000'
        ]);

        $interest=new Interest();
        $interest->content=$req->content;
        $interest->save();
        return back();

    }

    public function destroy_interest($id)
    {
        Interest::findOrFail($id)->delete();
        return back();
    }
    public function show_interest($id)
    {
        return view("BackOffice.show_interest",['interest'=>Interest::findOrFail($id)]);
    }
    
    public function update_interest(Request $req , $id)
    {
        $req->validate([
            'content'=>'required|max:1000'
        ]);

        $interest=Interest::findOrFail($id);
        $interest->content=$req->content;
        $interest->save();
        return back();
    }
}
