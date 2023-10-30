<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Validator;

class ContactusController extends Controller
{
    public function store(Request $request){
       // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $data=Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ]);
        return response()->json($data, 200);
    }
    public function contactDonation(){
        
    }
    public function emailSubscription(Request $request){
          
    }
}
