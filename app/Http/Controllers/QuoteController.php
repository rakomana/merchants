<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;
use App\Http\Requests\QuoteStoreRequest;
use Illuminate\Database\ConnectionInterface as DB;

class QuoteController extends Controller
{
    private $quote;
    private $db;

    public function __construct(Quote $quote, DB $db)
    {
        $this->quote = $quote;
        $this->db = $db;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuoteStoreRequest $request)
    {
        $this->db->beginTransaction();

        $quote = new $this->quote();
        $quote->full_name = $request->full_name;
        $quote->phone_number = $request->phone_number;
        $quote->postcode = $request->postcode;
        $quote->email = $request->email;
        $quote->business_name = $request->business_name;
        $quote->save();

        $this->db->commit();

        return redirect()->back()->with('success', 'Quote submitted succesfully');
    }
}
