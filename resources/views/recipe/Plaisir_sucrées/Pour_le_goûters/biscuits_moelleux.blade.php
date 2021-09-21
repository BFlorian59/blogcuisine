@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Biscuits moelleux </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Macarons italiens moelleux à l’amande (amaretti)</h2>
        <h3>origine : Italie</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>250 g d'amandes ou poudre d'amande</li>
                    <li>2 blancs d'oeufs</li>
                    <li>125 g de sucre</li>
                    <li>1 cuil. à café d'amande amère (+ sucre glace pour les rouler dedans)</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/amaretti.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Les amaretti trouvent leur origine à Venise en Italie au cours de la période de la Renaissance. Traditionnellement, 
      ces biscuits étaient servis au dessert avec un vin sucré ou une liqueur,
       mais ils sont aussi merveilleux pour accompagner une coupe de glace, de sorbets, ou de mousses ou même avec un café.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Avyhe2CdJtw" title="YouTube video player" frameborder="0"
           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

<style>
  .uper {
    margin-top: 40px;
  }
</style> 

 <div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

    @foreach($biscuits_moelleux as $biscuits_moelleu)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$biscuits_moelleu->titre}}</h2>
                <h3>origine : {{$biscuits_moelleu->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$biscuits_moelleu->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$biscuits_moelleu->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$biscuits_moelleu->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_biscuits_moelleux')}}">Ajouter une recette</a>
    </div>
<div>

@endsection