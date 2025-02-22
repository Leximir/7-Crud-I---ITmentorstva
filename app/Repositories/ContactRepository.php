<?php

namespace App\Repositories;

use App\Models\Contacts;

class ContactRepository
{
    private $contactModel;
    public function __construct()
    {
        $this->contactModel = new Contacts();
    }
    public function createNewContact($request){
        $this->contactModel->create([
            "email" => $request->get("email"),
            "subject" => $request->get("subject"),
            "message" => $request->get("message")
        ]);
    }
    public function getContactById($id){
        return $this->contactModel->where(['id' => $id])->first();
    }
}
