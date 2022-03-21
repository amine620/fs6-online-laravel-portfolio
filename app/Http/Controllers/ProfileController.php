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
     
        return view('BackOffice.profile',['profile'=>Profile::first()]);
    }

    public function store_profile(ProfileRequest $req)
    {
    //    $profile= new Profile();
    //    if($req->hasFile('photo'))
    //    {
    //        // $path= $req->photo->store('images');
    //        $path= Storage::putFile("profile",$req->photo);
    //        $profile->photo=$path;

    //    }
    //    $profile->first_name=$req->first_name;
    //    $profile->last_name=$req->last_name;
    //    $profile->address=$req->address;
    //    $profile->email=$req->email;
    //    $profile->bio=$req->bio;
    //    $profile->phone=$req->phone;
    //    $profile->facebook=$req->facebook;
    //    $profile->linkedin=$req->linkedin;
    //    $profile->github=$req->github;
    //    $profile->twitter=$req->twitter;
    //    $profile->save();

    if($req->hasFile('photo'))
       {
           $path= Storage::putFile("profile",$req->photo);
           $data=$req->validated();
           $data['photo']=$path;
           Profile::create($data);
       }

       return back();

    }

    public function destroy_profile($id)
    {
        Profile::findOrFail($id)->delete();
        return back();
    }

    public function show_profile($id)
    {
        return view('BackOffice.show_profile',['profile'=>Profile::findOrFail($id)]);
    }

    public function update_profile(ProfileRequest $req,$id)
    {
        $profile=Profile::findOrFail($id);
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

        // in case of user want to set another photo
        if($req->hasFile('photo'))
        {
            Storage::delete('profile',$profile->photo);
            $path=Storage::putFile('profile',$req->photo);
            $profile->photo=$path;
        }
        $profile->save();
        return back();
    }
}
