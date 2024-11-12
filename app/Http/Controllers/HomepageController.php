<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $hour = date("H");

        return view('welcome' , [
            'pageTitle' => 'Home',
            'currentTime' => date("H:i:s"),
            'currentHour' => $hour
        ]);
    }
}
