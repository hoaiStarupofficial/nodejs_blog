<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function showContactForm()
    {
        return view('contact-form');
    }

    public function insertContact(Request $request)
    {
        $params = $request->all();
        echo "Name:" . $params['name'] . "\n";
        echo "Title:" . $params['title'] . "\n";
        echo "Content:" . $params['message'] . "\n";
        return view('contact-form');
    }
}
