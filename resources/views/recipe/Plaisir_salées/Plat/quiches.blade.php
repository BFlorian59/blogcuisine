@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Quiches </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Quiche lorraine</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 pâte feuilletée</li>
                    <li>4 à 5 cas de crème fraîche</li>
                    <li> 2 paquets de 200 g de lardons</li>
                    <li>5 oeufs </li>
                    <li>50 à 100g d'emmental</li>
                    <li>du sel et du poivre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/quiche.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Dans sa description de la vie quotidienne lorraine de l’Ancien Régime, Guy Cabourdin précise que « la qualité de la quiche lorraine,
       mince et croustillante, était en fonction de la fraîcheur des produits employés ; le lard et l'épaisseur de la migaine ne vinrent
        qu'au xixe siècle4 ». De fait, la quiche contemporaine est très épaisse par rapport à la version historique et elle ne se consomme 
        sous cette forme que depuis le xixe siècle. Il n’est pas déraisonnable de penser qu’à l’instar de nombreux plats initialement 
        campagnards en Lorraine, marqués par la frugalité et la simplicité, l’augmentation du niveau de vie et l’adoption du plat par les 
        citadins bourgeois aient contribué à lui donner une plus grande consistance. Le fait que la quiche soit aujourd’hui associée à une 
        entrée n’est pas sans rapport avec cette évolution historique car, à l’origine dans les campagnes, il n’y avait de toute façon que 
        très rarement des entrées, mais aussi et 
      surtout parce que la quiche est une collation rapide par manque de temps de la maîtresse de maison le jour de la cuisson du pain.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Z5CXPs1r0fo" title="YouTube video player" frameborder="0" 
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

    @foreach($quiches as $quiche)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$quiche->titre}}</h2>
                <h3>origine : {{$quiche->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$quiche->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$quiche->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$quiche->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_quiches')}}">Ajouter une recette</a>
    </div>
<div>

@endsection