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

}
