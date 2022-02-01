<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessContuctMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function propertyInquiry(Request $request , $property_id){
        $request->validate([
            'name'=> 'required | max:255',
            'phone' => 'required | max:15',
            'email' => 'required | email | max:255',
            'message' => 'required | max:255',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message . '\n This message has been sent via'.route('single-property', $property_id) .'website.';
        $contact->save();

        //send mail user& admin via queue
        ProcessContuctMail::dispatch($contact);
       // Mail::send(new ContactMail($contact));

        return redirect(route('single-property', $property_id))->with(['message'=>'Your massage has been sent.']);
    }
}
