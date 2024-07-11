<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home', [
            'home' => Home::first(),
            'about' => About::first(),
            'product' => Product::all(),
            'contact' => Contact::first()
        ]);
    }

    public function show(String $id) 
    {
        $contact = Contact::first();
        return view('detail', [
            'data' => Product::find($id),
            'no_wa' => $contact['no_wa']
        ]);
    }
}
