@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Légumes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Margherita</h2>
        <h3>origine : Espagne</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1/4 tasse d'huile d'olive extra vierge</li>
                    <li>5 gousses d' ail</li>
                    <li>1 gros oignon</li>
                    <li>1 poivron vert</li>
                    <li>1 poivron rouge</li>
                    <li>1 courgette </li>
                    <li>2 boîtes de 15 oz de tomates en dés</li>
                    <li>pincée de sel de mer</li>
                    <li>pincée de poivre noir</li>
                    <li>pincée de sucre blanc</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/pisto.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Le pisto manchego (pisto manchois), connu également simplement comme pisto, est un plat traditionnel de la 
      cuisine espagnole qui consiste en différents légumes mijotés, en général des légumes de saison disponibles dans un verger. 
      Le surnom de manchois vient de La Mancha, bien qu'il soit possible de trouver ce plat partout en Espagne.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/x6FP6lgP4os" title="YouTube video player" frameborder="0" 
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

    @foreach($légumes as $légume)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$légume->titre}}</h2>
                <h3>origine : {{$légume->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$légume->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$légume->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$légume->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_légumes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection