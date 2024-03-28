<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request){
        Enquiry::create($request->post());
        // return redirect()->back()->with('success', 'Your Enquiry has been Successfully Accepted. We will Connect with you soon !!');
        return view('visitors.thanku');
    }
}
