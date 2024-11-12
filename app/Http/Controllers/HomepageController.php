<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $hour = date("H");

        return view('welcome' , [
            'pageTitle' => 'Home',
            'currentTime' => date("H:i:s"),
            'currentHour' => $hour,
            'latestProducts' => Products::all()->reverse()->take(6)
        ]);
    }
}
