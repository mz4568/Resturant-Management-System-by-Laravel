<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;
class ContactController extends Controller
{
    

    public function store(Request $request){
    	$this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('welcome');
    }

   public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact',compact('contacts'));
    }
    public function destroy($id){
    	Contact::find($id)->delete();
        Toastr::success('Contact Message successfully deleted','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('contact.index');
    }
    
    public function edit($id){
    	$contact=Contact::find($id);
        return view('admin.contact_edit',compact('contact'));
    }
    
    public function update(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact =Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        Toastr::success('Your message successfully send.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('contact.index');
    }
       public function show($id)
       {
       $contact = Contact::find($id);
        return view('admin.contact_show',compact('contact'));
        }
}
