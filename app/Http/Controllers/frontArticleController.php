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

      
    /*INDEX 2 RESERVER A L'ECONOMIE INTERNATIONAL*/
    public function index2()
    {
        $internationnalArticle=new internationalArticle();
        $top=$internationnalArticle->getTopnews_eco();
        $general=$internationnalArticle->getarticles_eco();
        $sources=$internationnalArticle->getsources_eco();
        
        return view('international.economie',[
         
            'top'=>$top,
            'popular'=>$general,
            'sources'=>$sources
            ]);
    }


      
    /*INDEX 3 RESERVER A 'SOCIETE INTERNATIONAL*/
    public function index3()
    {
        $internationnalArticle=new internationalArticle();
        $top=$internationnalArticle->getTopnews_societe();
        $general=$internationnalArticle->getarticles_societe();
        $sources=$internationnalArticle->getsources_societe();
        
        return view('international.societe',[
         
            'top'=>$top,
            'popular'=>$general,
            'sources'=>$sources
            ]);
    }
    /*INDEX 4 RESERVER A COOPEREATION  INTERNATIONAL*/
    public function index4()
    {
        $internationnalArticle=new internationalArticle();
        $top=$internationnalArticle->getTopnews_cooperation();
        $general=$internationnalArticle->getarticles_cooperation();
        $sources=$internationnalArticle->getsources_cooperation();
        
        return view('international.coopreration',[
         
            'top'=>$top,
            'popular'=>$general,
            'sources'=>$sources
            ]);
    }

     /*INDEX 5 RESERVER A LA CULTURE INTERNATIONAL*/
     public function index5()
     {
         $internationnalArticle=new internationalArticle();
         $top=$internationnalArticle->getTopnews_culture();
         $general=$internationnalArticle->getarticles_culture();
         $sources=$internationnalArticle->getsources_culture();
         
         return view('international.culture',[
          
             'top'=>$top,
             'popular'=>$general,
             'sources'=>$sources
             ]);
     }


     /*INDEX 6 RESERVER AU ACTUALITER DIVER*/
     public function index6()
     {
         $internationnalArticle=new internationalArticle();
         $top=$internationnalArticle->getTopnews_autre();
         $general=$internationnalArticle->getarticles_autre();
         $sources=$internationnalArticle->getsources_autre();
         
         return view('international.culture',[
          
             'top'=>$top,
             'popular'=>$general,
             'sources'=>$sources
             ]);
     }
}

