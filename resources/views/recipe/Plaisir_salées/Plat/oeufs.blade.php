@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Oeufs </h1>
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
                    <li>6 tranches de pain de mie</li>
                    <li>2 tranches de jambon</li>
                    <li>60g de fromage râpé</li>
                    <li>30g de beurre fondu</li>
                    <li>3 œufs</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Croque-madame.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Un croque-madame ou croquemadame est un sandwich de jambon et fromage, le plus souvent d'emmental, grillé à la poêle, au four
       ou dans un appareil spécifique, et surmonté d'un œuf au plat.
      C'est une variante du croque-monsieur. L'œuf présent sur le pain supérieur évoquant les chapeaux que les femmes portaient à l'époque,
       c'est ainsi que cette recette fut baptisée « croque madame »
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tLH7N2APuTk" title="YouTube video player" frameborder="0" 
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

    @foreach($oeufs as $oeuf)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$oeuf->titre}}</h2>
                <h3>origine : {{$oeuf->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$oeuf->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$oeuf->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$oeuf->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_oeufs')}}">Ajouter une recette</a>
    </div>
<div>

@endsection