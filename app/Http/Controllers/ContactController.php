<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $request-> validate([

            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10|numeric',
            'subject'=>'required',
            'message'=>'required',

        ]);

        Contact::create($request->all());

        return redirect()->back()
                         ->with(['success' =>'Merci pour votre message, nous vous répondrons bientôt !']);
    }
}
