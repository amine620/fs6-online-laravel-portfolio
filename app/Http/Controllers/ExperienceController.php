<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function create_experience()
    {
          return view('BackOffice.create_experience');
    }
}
