<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

use Illuminate\Database\Eloquent\Model;

class internationalArticle extends Model
{
    //
    private $url="https://newsapi.org/v2/";
    private $key="9fef91df573148588901f81df2c8456b";

  /******************************    POLITIQUE INTERNATIONAL API                ******************************************/ 
    function getsources(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){

        }
        
    }
    function getarticles($source="ABC News",$categorie="general",$language="fr"){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=10&apiKey=".$this->key."&language=".$language);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){

        }
    }
    function getTopnews(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=7&apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){
        }
    }






    /*************************************-----ECONOMIE INTERNATIONAL*************************************************** */

    function getsources_eco(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){

        }
        
    }
    function getarticles_eco($source="les-echos",$categorie="business",$language="fr"){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=10&apiKey=".$this->key."&language=".$language);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){

        }
    }
    function getTopnews_eco(){
        try {
            $http=new Client();
            $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=7&apiKey=".$this->key);
            $source=json_decode($apiRequest->getBody()->getContents());
            return $source;
        }catch (RequestException $e){
        }
    }




 /*************************************-- SOCIETE°INTERNATIONAL*************************************************** */



 function getarticles_societe($source="liberation",$categorie="general",$language="fr"){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=10&apiKey=".$this->key."&language=".$language);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
 }
 function getTopnews_societe(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=7&apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){
    }
 }

 function getsources_societe(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
}





 /*************************************-- COOPERATION°INTERNATIONAL*************************************************** */



 function getarticles_cooperation($source="liberation",$categorie="general",$language="fr"){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=10&apiKey=".$this->key."&language=".$language);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
 }
 function getTopnews_cooperation(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=7&apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){
    }
 }

 function getsources_cooperation(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
}


/*************************************-- CULTURE°INTERNATIONAL*************************************************** */



function getarticles_culture($source="liberation",$categorie="general",$language="fr"){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=10&apiKey=".$this->key."&language=".$language);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
 }
 function getTopnews_culture(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=7&apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){
    }
 }

 function getsources_culture(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
}



/*************************************-- CULTURE°INTERNATIONAL*************************************************** */



function getarticles_autre($source="national-geographic",$categorie="science",$language="en"){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?source=".$source."&category=".$categorie."&pageSize=15&apiKey=".$this->key."&language=".$language);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
 }
 function getTopnews_autre(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."top-headlines?country=en&pageSize=7&apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){
    }
 }

 function getsources_autre(){
    try {
        $http=new Client();
        $apiRequest=$http->request('GET',$this->url."sources?apiKey=".$this->key);
        $source=json_decode($apiRequest->getBody()->getContents());
        return $source;
    }catch (RequestException $e){

    }
}

}   
