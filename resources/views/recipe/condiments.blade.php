@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: les condiment </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Condiment au raisin et aux épices</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>200g de raisin frais </li>
                    <li>10g de pignon de pin</li>
                    <li>10g de pistaches</li>
                    <li>10g de baies Goji</li>
                    <li>1/2 c à c de cumin</li>
                    <li>1/2 c à c de gingembre</li>
                    <li>1 clou de girofle</li>
                    <li>1 badiane (étoile anisé)</li>
                    <li>50g de vinaigre</li>
                    <li>50g de sirop d'érable</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Condiment.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Outre la consommation de vin comme boisson, le raisin, ainsi que ses autres dérivés liquides, tels le vinaigre, 
      le verjus ou encore le moût, sont largement employés dans la cuisine médiévale. Les livres de cuisine qui 
      se multiplient dans tout l’Occident à partir du xiiie siècle, mais surtout aux xive et xve siècles témoignent de cette importance.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/syVyp9aBqg0" title="YouTube video player" frameborder="0"
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

    @foreach($condiments as $condiment)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$condiment->titre}}</h2>
                <h3>origine : {{$condiment->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$condiment->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$condiment->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$condiment->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_condiments')}}">Ajouter une recette</a>
    </div>
<div>

@endsection