<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Database\ConnectionInterface as DB;

class ContactController extends Controller
{
    private $contact;
    private $db;

    public function __construct(Contact $contact, DB $db)
    {
        $this->contact = $contact;
        $this->db = $db;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $this->db->beginTransaction();

        $contact = new $this->contact();
        $contact->full_name = $request->full_name;
        $contact->phone_number = $request->phone_number;
        $contact->postcode = $request->postcode;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $this->db->commit();

        return redirect()->back()->with('success', 'Thanks for the enquiry we will be in touch');

    }
}
