<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\RedirectResponse;
use Illuminate\Support\facades\Mail;
use Illuminate\Queue\SerializesModels;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Notification;


class ContactController extends Controller
{
    public array $data;

    public function _construct($content){
        $this->data = $content;
    }



    public function index(){
       $contacts = Contact::all();
       return view('admin.messages.index', compact('contacts'));
    }

    public function show(Contact $msg, string $id)
    {
        $contacts = Contact::all();
        $msg = Contact::findOrFail($id);
        return view('admin.messages.showMessage', compact('contacts', 'msg'));
    }
    public function create(){
        $contacts = Contact::all();
        $msg = Contact::find(1)->messages;
        Mail::to('hello@example.com')->send(new ContactMail($msg));
        return view('admin.messages.index', compact('contacts'));
    }

    public function store(Request $request)
       {
        $msg = new Contact();
        $msg->name = $request->name;
        $msg->body = $request->input('body');
        $msg->email = $request->email;
        $msg->save();

        return  back()->with('success', 'message sent successfully');
    }
    public function createMsg(){
        $contacts = Contact::all();
        return view('admin.messages.add', compact('contacts'));
    }

    public function storeMsg(Request $request)
    {
    //  $msg = new Contact();
     $msg = Contact::create
     ([
     'name' => $request->name,
     'body' => $request->input('body'),
     'email' => $request->email,
     ]);

     Notification::send();
     $msg->save();
     return back()->with('success', 'message sent successfully');
 }

 public function destroy(string $id)
 {
     $contact = Contact::findOrFail($id);
     $contact->delete();
     return redirect('contactMsg')->with('success','Message deleted Successfully' );
 }

}
