<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Newsletter;
class NewsLetterController extends Controller
{
    public function create()
    {
        return view('layout.master');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', 'Merci pour Votre Souscription');
        }
        return redirect('/')->with('failure', 'Sorry! Vous ete Deja Inscrit au newsletter ');
            
    }
}