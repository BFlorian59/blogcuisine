@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Gâteaux au chocolat </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Gâteau au chocolat </h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>200g de chocolat</li>
                    <li>125g de farine </li>
                    <li>125g de beurre</li>
                    <li>250g de sucre </li>
                    <li>5 œufs</li>
                    <li> 1/2 sachet de levure chimique </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/chocolat.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Il existe de nombreuses recettes à travers le monde. Cette forme de gâteau aurait été imaginée à la fin du xviiie siècle, 
      après plusieurs siècles d'utilisation du chocolat uniquement en boisson.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9ZOEZ-iC6z4" title="YouTube video player" frameborder="0" 
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

    @foreach($gâteaux_au_chocolat as $gâteaux_au_chocolats)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$gâteaux_au_chocolats->titre}}</h2>
                <h3>origine : {{$gâteaux_au_chocolats->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$gâteaux_au_chocolats->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$gâteaux_au_chocolats->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$gâteaux_au_chocolats->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_gâteaux_au_chocolat')}}">Ajouter une recette</a>
    </div>
<div>

@endsection