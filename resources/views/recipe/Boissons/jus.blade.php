@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Jus de fruits </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Jus de raisin</h2>
        <h3>origine : Europe</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>3 kilos de raisins rouge  </li>
                    <li>1 litre d'eau bouillante </li>
                    <li>200gr sucre  </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/raisin.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Au Moyen Age, on ne connaissait pas encore la pasteurisation. Le jus de raisin pressé ne se gardait pas très longtemps. 
      Pour le conserver un à deux ans, il était recommandé de le saler : La plus commune façon de faire le verjus en ce pays est de 
      cueillir les grappes verdes des raisins de treilles, ou raisins non encore mûrs que l'on trouve aux vignes après vendanges faites, 
      puis de les fouler, et en exprimer en pressoir, à la façon des raisins mûrs." 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HSzmI2v3dzc" title="YouTube video player" frameborder="0" 
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

    @foreach($jus as $ju)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$ju->titre}}</h2>
                <h3>origine : {{$ju->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$ju->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$ju->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$ju->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_jus')}}">Ajouter une recette</a>
    </div>
<div>

@endsection