<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.messages.index', compact('contacts'));
    }

    public function show(string $id)
    {
        $msg = Contact::findOrFail($id);
        return view('admin.messages.showMessage', compact('msg'));
    }

    public function create()
    {
        return view('admin.messages.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'message' => 'required|min:10|max:255',
            'email' => 'required|email|min:10|max:255',
        ],[
            'name.required'=> 'Please tell us your name',
            'message.required'=> 'Please tell us your message to write back.',
            'email.required'=> 'Please tell us your email to contact you.',
        ]);

        $msg = new Contact();
        $msg->name = $request->name;
        $msg->message = $request->message;
        $msg->email = $request->email;
        $msg->save();

        Mail::to('hello@example.com')->send(new ContactMail($msg));

        return back()->with('success', 'Message sent successfully');
    }

    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('contactMsg')->with('success','Message deleted successfully' );
    }
}
