<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class AdminContact extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.contacts', [
            'contacts' => $contacts
        ]);
    }

    public function contactNew(){
        return view('admin.contact.new');
    }


    public function contactUpdate($id){
        $contact = Contact::find($id);

        return view('admin.contact.edit', [
            'contact' => $contact
        ]);
    }

    public function contactUpdateSubmit($id, ContactRequest $request){
        $contact = Contact::find($id);

        $contact->title = $request->title;
        $contact->adres =$request->adres;
        $contact->email= $request->email;
        $contact->phone = $request->phone;
        $contact->map = $request->map;

        $contact->save();

        return redirect()->route('admin-contacts');
    }

    public function contactDelete($id){
        $contacts = Contact::find($id);
        $contacts->delete();

        return $this->index();
    }

    public function contactCreate(ContactRequest $request){

        $contact = new Contact();
        $contact->title = $request->title;
        $contact->adres =$request->adres;
        $contact->email= $request->email;
        $contact->phone = $request->phone;
        $contact->map = $request->map;

        $contact->save();

        return redirect()->route('admin-contacts');
    }

}

