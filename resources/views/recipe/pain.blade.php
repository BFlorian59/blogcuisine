@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: les pains </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Pain maison</h2>
        <h3>origine : Égypte antique</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 kg de farine type T55</li>
                    <li>625g d'eau</li>
                    <li>16g de sel</li>
                    <li>30g de levure boulangère</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/pain.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Le pain que nous consommons aujourd’hui résulte d’un long cheminement agricole, technologique et gastronomique.
        L’histoire du pain commence dès le Paléolithique supérieur.
        L'usage du pain semble s'être répandu en Europe par le biais des Phéniciens.
        On attribue généralement l'invention du pain au levain aux Égyptiens alors que, des siècles plus tard, 
        les Romains se nourrissaient encore de bouillie. Grands observateurs de la nature, les Égyptiens avaient compris qu'ils pouvaient 
        fabriquer du pain en mélangeant du grain écrasé, ou moulu, à l'eau du Nil, particulièrement riche en limons, ceux-ci renfermant des 
        agents de fermentation utilisés encore trois millénaires plus tard. Cette découverte — laisser la pâte en attente, livrée à 
        l'action des germes, puis oser la cuire, 
        donna aux habitants de la vallée du Nil un ascendant considérable sur les peuples mangeurs de bouillie et de galette.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/47Pw_P_RMdg" title="YouTube video player" frameborder="0" 
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

    @foreach($pain as $pains)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$pains->titre}}</h2>
                <h3>origine : {{$pains->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$pains->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$pains->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$pains->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_pain')}}">Ajouter une recette</a>
    </div>
<div>

@endsection