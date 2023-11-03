<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Validator;

class VolunteerController extends Controller
{
    public function join(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100|unique:users',
            'mobile' => 'required|min:10',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors()->first(), 422);
        }
        Volunteer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'state'=>$request->state,
            'city'=>$request->city,
            'pincode'=>$request->pincode,
            'address1'=>$request->address1,
            'address2'=>$request->address2,
        ]);
        


    }
}
