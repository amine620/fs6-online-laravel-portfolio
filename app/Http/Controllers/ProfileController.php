<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function create_profile()
    {
        return view('BackOffice.create_profile');
    }

    public function store_profile(ProfileRequest $req)
    {
       $profile= new Profile();
       if($req->hasFile('photo'))
       {
           // $path= $req->photo->store('images');
           $path= Storage::putFile("profile",$req->photo);
           $profile->photo=$path;

       }
       $profile->first_name=$req->first_name;
       $profile->last_name=$req->last_name;
       $profile->address=$req->address;
       $profile->email=$req->email;
       $profile->bio=$req->bio;
       $profile->phone=$req->phone;
       $profile->facebook=$req->facebook;
       $profile->linkedin=$req->linkedin;
       $profile->github=$req->github;
       $profile->twitter=$req->twitter;
       $profile->save();
       return back();

    }
}
