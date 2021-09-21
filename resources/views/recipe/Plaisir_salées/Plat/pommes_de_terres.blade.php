@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Pommes de terres </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Le gratin dauphinois</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>800 g de pommes de terre à chair ferme</li>
                    <li>1 gousse d’ail</li>
                    <li>0,5 l de lait entier</li>
                    <li>0,3 l de crème liquide 35%</li>
                    <li>30 g de beurre</li>
                    <li>Noix de muscade </li>
                    <li>Sel</li>
                    <li>Poivre</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/dauphine.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Le gratin dauphinois est officiellement mentionné pour la première fois le 12 juillet 1788 (à la veille de la Révolution française)
       à l'occasion d'un dîner offert aux officiers municipaux de la ville de Gap dans le Dauphiné, 
      par le duc Jules Charles Henri de Clermont-Tonnerre, alors lieutenant général du Dauphiné ; le plat était servi avec des ortolans.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/saDacfIwLdY" title="YouTube video player" frameborder="0" 
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

    @foreach($pommes_de_terres as $pommes_de_terre)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$pommes_de_terre->titre}}</h2>
                <h3>origine : {{$pommes_de_terre->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$pommes_de_terre->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$pommes_de_terre->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$pommes_de_terre->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_pommes_de_terres')}}">Ajouter une recette</a>
    </div>
<div>

@endsection