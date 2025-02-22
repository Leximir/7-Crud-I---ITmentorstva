<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactRequest;
use App\Models\Contacts;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller{
    private $contactRepo;
    public function __construct(){
        $this->contactRepo = new ContactRepository();
    }
    public function index() {
        return view('contact' , [
            'pageTitle' => 'Contact'
        ]);
    }
    public function getAllContacts(){

        return view('all-contacts' , [
            'pageTitle' => 'All Contacts',
            'allContacts' => Contacts::all() // SELECT * FROM contacts
        ]);
    }
    public function sendContact(SendContactRequest $request){

        $this->contactRepo->createNewContact($request);

        return redirect('/shop');
    }
    public function delete($contact){
        $singleContact = $this->contactRepo->getContactById($contact);

        if($singleContact === null){
            die('Ovaj kontakt ne postoji');
        }

        $singleContact->delete();

        return redirect()->back();
    }
}
