@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Recettes pour le Ramadhan </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Kalb el louz</h2>
        <h3>origine : Algérie</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>6 verre de semoule grosse ( un verre de 180 ml) </li>
                    <li>3 verre de sucre </li>
                    <li>1 verre de babeurre lben </li>
                    <li>1 verre d'huile </li>
                    <li>100 ml d'eau de fleur d'oranger </li>
                    <br>
                    <li>Pour le sirop: </li>
                    <li>6 verres d'eau</li>
                    <li>3 verres de sucre</li>
                    <li>2 c a soupe d'eau de fleur d'oranger</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/kalb.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Kalb el louz ou qalb el louz est une pâtisserie algérienne1, originaire de Constantine.
        Cette pâtisserie est une des plus populaires du pays. Elle est très largement consommée durant les soirées du mois 
        sacré du ramadan2 avec un thé à la menthe ou du thé noir aux clous de girofle ou du café.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Uyb2ByyRVDE" title="YouTube video player" frameborder="0" 
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

    @foreach($ramadhan as $ramadhans)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$ramadhans->titre}}</h2>
                <h3>origine : {{$ramadhans->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$ramadhans->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$ramadhans->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$ramadhans->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_ramadhan')}}">Ajouter une recette</a>
    </div>
<div>

@endsection