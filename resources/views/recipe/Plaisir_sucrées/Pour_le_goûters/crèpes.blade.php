@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Crèpes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Crêpe bretonne</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>500 g de farine</li>
                    <li>180 g de sucre en poudre</li>
                    <li>1 cuillère à café de cannelle moulue</li>
                    <li>1 verre d'eau (150 ml)</li>
                    <li>3 œufs</li>
                    <li>50 g de beurre</li>
                    <li>1 L de lait</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/bretonne.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La culture du blé noir se développe à partir du xvie siècle bien qu'on trouve dès le xiie siècle des traces de pollen de 
      sarrasin dans des tourbières en Bretagne.
        La galette est attestée dès le Moyen Âge. Elle se mange à la main ou trempée dans la soupe pour l'épaissir. Sa pâte sert 
        aussi à la préparation de bouillies.
        La crêpe de blé noir est attestée à partir du milieu du xixe siècle, la version sucrée au froment n’apparaissait qu'à la fin 
        du xixe siècle, du fait du prix de la farine de froment.
        Au milieu du xxe siècle, du fait de l'émigration de nombreux Bretons, des crêperies bretonnes ont vu le jour en France et 
        notamment à Paris, dans le quartier de Montparnasse, mais aussi dans de nombreux pays à travers le monde.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/x6WImnnl7us" title="YouTube video player" frameborder="0" 
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

    @foreach($crèpes as $crèpe)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$crèpe->titre}}</h2>
                <h3>origine : {{$crèpe->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$crèpe->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$crèpe->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$crèpe->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_crèpes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection