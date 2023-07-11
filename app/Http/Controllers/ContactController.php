<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            abort(400, 'Invalid request format');
        }
    
        $validatedData = $validator->validated();
        
        $contact = new Contact();
        $contact->date = date('Y-m-d');
        $contact->name = $validatedData['full_name'];
        $contact->phone = $validatedData['phone'];
        $contact->email = $validatedData['email'];
        $contact->subject = $validatedData['subject'];
        $contact->comment = $validatedData['message'];
        $contact->save();

        return redirect('/contact');
    }
}
