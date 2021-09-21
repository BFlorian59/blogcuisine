@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Les epices </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Poulet Tandoori</h2>
        <h3>origine : Inde</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 yaourt nature brassé </li>
                    <li>1 à 1/2 à càc de piment rouge ( doux)</li>
                    <li>1 càc de colorant alimentaire rouge</li>
                    <li>1 càc de colorant alimentaire orange</li>
                    <li>1 càc de sel</li>
                    <li>1/4 càc de poudre de gingembre </li>
                    <li>1/4 càc d’ail en poudre</li>
                    <li>2 càc d’huile</li>
                    <li>1/2 jus de citron</li>
                    <li>2 càs de mélange d’épices tandoori TRS</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Tandoori.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> ette délicieuse préparation a vu le jour dans le nord de l’Inde au début du XXe siècle. L’origine de l’incontournable 
      poulet tandoori provient du terme tandoor. Ce dernier désigne un four
       en terre cuite généralement utilisé pour la cuisson du naan, un pain indien. Un jour, un cuisinier décide d’y insérer un poulet.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JzWx7NcHxKc" title="YouTube video player" frameborder="0" 
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

    @foreach($epices as $epice)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$epice->titre}}</h2>
                <h3>origine : {{$epice->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$epice->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$epice->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$epice->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_epices')}}">Ajouter une recette</a>
    </div>
<div>

@endsection