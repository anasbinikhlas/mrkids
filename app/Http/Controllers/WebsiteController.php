<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function home()
    {
        return view('home');

    }

    public function about()
    {
        return view('about');

    }

    public function shop()
    {
        return view('shop');

    }

    public function contact()
    {
        return view('contact');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',            
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
