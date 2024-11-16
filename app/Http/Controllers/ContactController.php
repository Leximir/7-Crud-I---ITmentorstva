<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller{
    public function index() {
        return view('contact' , [
            'pageTitle' => 'Contact'
        ]);
    }
    public function getAllContacts(){

        return view('all-contacts' , [
            'pageTitle' => 'ADMIN',
            'allContacts' => Contacts::all() // SELECT * FROM contacts
        ]);
    }
    public function sendContact(Request $request){
        $request->validate([
            "email" => "required|string" ,
            "subject" => "required|string",
            "description" => "required|string|min:5|max:255"
        ]);

        Contacts::create([
            "email" => $request->get("email"),
            "subject" => $request->get("subject"),
            "message" => $request->get("description")
        ]);

        return redirect('/shop');
    }
}
