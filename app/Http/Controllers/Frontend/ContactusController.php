<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;


class ContactusController extends Controller
{
//
    public function contacts(){

        return view('frontend.feedback.contactus');
    }

    public function store(Request $request) {

            $this->validate($request, [
                'name' => 'required',
                'subject' => 'required',
                'phone_num'=> 'required',
                'email' => 'required',
                'subject' => 'required',
                'message'=> 'required',
                'g-recaptcha-response' => 'required',
            ]);

            Contact::create($request->all());

//        $contacts = new Contact;
//
//        $contacts->fill($request->all());
//        $contacts->save();

        return redirect('/contactus')->with('status', 'Contact form submitted successfully');
    }
}
