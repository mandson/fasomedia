<?php

namespace App\Http\Controllers;

use App\internationalArticle;
use Illuminate\Http\Request;

class frontArticleController extends Controller
{
    //
    public function index()
    {
        $internationnalArticle=new internationalArticle();
        $top=$internationnalArticle->getTopnews();
        $general=$internationnalArticle->getarticles();
        $sources=$internationnalArticle->getsources();
        
        return view('international.politique',[
         
            'top'=>$top,
            'popular'=>$general,
            'sources'=>$sources
            ]);
    }

}
