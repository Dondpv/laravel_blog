<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller{

    public function submit (ContactRequest $req) {
       //$validation = $req->validate([
         //  'subject'=> 'required|min:5|max:50',
         // 'email' => 'required|min:5|email'

       //]);
        $contact=new contact();
        $contact ->name = $req->input( 'name');
        $contact->email =$req->input('email');
        $contact->Subject =$req->input('subject');
        $contact->message =$req->input('message');

        $contact->save();
        return redirect()->route('home')->with('success','Сообщение было добавлено');
    }
}
