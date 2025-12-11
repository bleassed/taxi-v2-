<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index(){

    return view('index');


}

    public function book(){
        
        return view('book');


    }

}
