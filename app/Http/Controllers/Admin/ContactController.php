<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function PostContactDetails(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        date_default_timezone_set('Asia/Jakarta');
        $contact_time = date('h:i:sa');
        $contact_date = date('d-m-Y');
        $result = Contact::create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_time' => $contact_time,
            'contact_date' => $contact_date
        ]);
        if ($result) {
            return 'Message Succesfully Send';
        }else {
            return 'Message Failed to Send';
        }
    }
}
