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
    public function allData() {
        $contact = new Contact;
      // dd(contact);
        //return view('messages',['data' => $contact->orderby('id','desc')->skip(1)->take(2)->get()]);
       // return view('messages',['data' => $contact->orderby('id','desc')->take(2)->get()]);
       // return view('messages',['data' => $contact->orderby('id','desc')->get()]);
        //return view('messages',['data' => $contact->inRandomOrder()->get()]);
        //return view('messages',['data' => [$contact->inRandomOrder()->first()]]);
        return view('messages',['data' => $contact->all()]);
        //return view('messages',['data' => [$contact->find(4)]]);
        //return view('messages',['data' => $contact->where('subject', '=', 'Hello')->get()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
    return view('one-message',['data' => $contact->find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message',['data' => $contact->find($id)]);

    }
    public function updateMessageSubmit ($id, ContactRequest $req) {
        //$validation = $req->validate([
        //  'subject'=> 'required|min:5|max:50',
        // 'email' => 'required|min:5|email'

        //]);
        $contact=Contact::find($id);
        $contact ->name = $req->input( 'name');
        $contact->email =$req->input('email');
        $contact->Subject =$req->input('subject');
        $contact->message =$req->input('message');

        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success','Сообщение было обновленно');
    }
    public function deleteMessage ($id) {
        $contact=Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Сообщение было удаленно');



    }
}
