<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function join(Request $request){
        
        Volunteer::create([
            ''
        ]);

    }
}
