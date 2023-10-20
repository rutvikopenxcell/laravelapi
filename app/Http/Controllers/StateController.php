<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;


class StateController extends Controller
{
    public function getState(){
        $state =  State::all();
        return response()->json([
            'message' => 'list of all state',
            'state' => $state
        ], 200);
    }
    public function getCity($id){
        $city =  City::find($id);
        return response()->json([
            'message' => 'list of all cities',
            'city' => $city
        ], 200);
    }
}
