<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ContactController extends Controller{
     
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
 
        // validate fields
        $this->validate($request, [
            'name' => ['required', 'string', new NoHtml],
            'email' => ['required', 'email', new NoHtml],
            'subject' => ['required', 'string', new NoHtml],
            'message' => ['required', 'string', new NoHtml]
        ]);
 
 
 
        // redirect to contact form with message
        session()->flash('success', 'Message is sent! We will get back to you soon!');
 
        return redirect()->back();
 
    }
 
}
