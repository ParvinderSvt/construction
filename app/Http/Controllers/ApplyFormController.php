<?php

namespace App\Http\Controllers;

use App\Models\ApplyForm;
use Illuminate\Http\Request;

class ApplyFormController extends Controller
{
    public function store(Request $request){
        ApplyForm::create($request->post());
        // return redirect()->back()->with('success', 'Your Form has been successfully accepted !!');
        return view('visitors.thanku');
    }
}
