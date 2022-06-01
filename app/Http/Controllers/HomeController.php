<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLocation;

class HomeController extends Controller
{
    //map
    public function map(){
        return view('map');
    }
    //index
    public function index(){
        return view('welcome');
    }
    //save
    public function save($lat, $lng){
        return [
            'lat'=>$lat,
            'lng'=>$lng
        ];
    }
    //save_data
    public function save_data(){
        return view('save-data');
    }
    //save_info
    public function save_info(Request $request){
        $save = UserLocation::create($request->all());
        \Session::put('success', 'Save Your Data Successfully...!');
        return redirect()->route('list');
    }
}
