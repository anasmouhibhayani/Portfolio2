<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function create(Request $request){
        
        Contact::create($request->all());
        return redirect('/');
    }
    public function index(){
        $contacts = Contact::all();
        return View("tabel",compact("contacts"));
    }
}
