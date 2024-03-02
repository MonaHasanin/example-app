<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
// use Mail;
class ContactController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $contacts = Contact::all();
        $msg = new Contact(); 
        $categories = Category::all();
        return view('admin.contact.messages', compact('contacts', 'categories', 'msg', 'user'));
    }

    public function show(string $id)
    {
        $user = Auth::user();
        $contacts = Contact::all(); 
        $msg = Contact::findOrFail($id);
        return view('admin.contact.showMessage', compact('msg' ,'contacts', 'user'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('front.index', compact( 'categories' ));
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

        Mail::to('hello@example.com')->send(new DemoMail($msg));

        return back()->with('success', 'Message sent successfully');
    }

    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect('contactUs')->with('success','Message deleted successfully' );
    }
}
