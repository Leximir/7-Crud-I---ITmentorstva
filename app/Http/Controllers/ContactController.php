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

}
