<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\SendEmail;
use App\Models\Objet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexS()
    {
        $subjects = Objet::all();
        return view('partial.contact.index',compact('subjects'));
    }
    public function index(){
        $mails = Contact::paginate(4);
        return view('administration.contact.index',compact('mails'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Mail::to("admin@email.com")->send(new SendEmail($request));
       $mail = new Contact;
       $mail->email = $request->email;
       $mail->text = $request->message;
       $mail->subject_id = $request->subject;
       $mail->save();
       
       return redirect()->back()->with('msg','Merci de nous avoir contacté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $mail = Contact::find($contact->id);
        return view('administration.contact.show',compact('mail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $mail = Contact::find($contact->id);
        $mail->delete();
        return redirect('admin/contact');
    }
}
