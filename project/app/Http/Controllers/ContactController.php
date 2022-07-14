<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = \App\Models\Contact::all();
        return view('contacts', ['contacts' => $contacts]);
    }

}
