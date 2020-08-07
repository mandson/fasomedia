<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abonner;
class MailController extends Controller
{
    //
    public function sendMailView(){
        return view('send_mail');
    }

    public function sendMail(Request $request){
        $email=$request->email;
        $nom=$request->nom;
        $prenom=$request->prenom;
       
        Abonner::create([
                    
            'email'=>$email,
            'nom'=>$nom,
            'prenom'=>$prenom
                    ]);          
                   

        $data=[
            'email'=>$email,
            'nom'=>$nom,
            'prenom'=>$prenom
        ];

        \Mail::to($email)->send(new \App\Mail\ExampleMail($data) );
        dd('Abonnement au journal Quotidient reussit ! s"il vous plait consulter votre boite mail');

    }
}   
