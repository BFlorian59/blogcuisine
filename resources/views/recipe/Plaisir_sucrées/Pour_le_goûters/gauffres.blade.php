@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Gauffres </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Gaufre de Bruxelles</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>250 g de farine</li>
                    <li>15 g de levure fraîche</li>
                    <li>375 g de lait</li>
                    <li>3 oeufs (séparez les blancs des jaunes)</li>
                    <li>20 g de sucre semoule</li>
                    <li>10 g de sucre vanillé</li>
                    <li>5 g de sel</li>
                    <li>100 g de beurre fondu</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/bruxelloise.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Quant à la dénomination « de Bruxelles », elle serait apparue en 1842… Alors, qu’on le veuille ou non, la doyenne des gaufre,
       c’est bien la Liégeoise, inventée, selon la légende, 
      par le cuisiner du prince-évêque de la Cité ardente au XVIIIe siècle, qui voulait créer « quelque chose de savoureux et sucré ».
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7_wuVI4ywnk" title="YouTube video player" frameborder="0" 
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

    @foreach($gauffres as $gauffre)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$gauffre->titre}}</h2>
                <h3>origine : {{$gauffre->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$gauffre->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$gauffre->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$gauffre->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_gauffres')}}">Ajouter une recette</a>
    </div>
<div>

@endsection