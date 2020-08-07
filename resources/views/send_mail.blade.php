
@extends('layout/master')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
<link href="{{asset('assets/css/style2.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}/" rel="stylesheet">
 <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}"/> 
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<title>S'Abonner au journal Quotidient</title>
</head>
<body> 
<div class=" container bg bg-light  " >
   <div class="container row  ">
              <div  class="col-md-3" >  </div>
                <div class="col-md-5 border border-dark abonner " >
                  <form  method="post" action="{{route('sendMail')}}">
                        @csrf
                        <div> <h2>Abonnement *journal* Quotidient</h2></div>
                            <div class="form-group">
                                <div class="">
                                    <label for="nom">Nom:</label>
                                    <input type="text" name="nom" id="nom" class="form-control">
                                </div>
                            </div>

                            <div class=" form-group">
                                <div class="">
                                    <label for="prenom">Prenom:</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control">
                                </div>
                            </div>

                            <div class=" form-group">
                                <div class="">
                                    <label for="email">Votre adress Email:</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div> <button type="submit" class="btn btn-success w-40 float-right mt-3">souscrire</button></div>
                            </div>
                     </form>
                </div>
        </div>
        <div  class="col-md-4" >  </div>
                        
        

                </div>
</body>
</html>
@endsection
