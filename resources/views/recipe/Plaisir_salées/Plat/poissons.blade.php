@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Poissons </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Poke Bowl</h2>
        <h3>origine : Hawaï</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li> base de riz ou quinoa</li>
                    <li>Saumon frais</li>
                    <li>Huile de sesame + sauce soja + jus citron</li>
                    <li>Avocat, mangue, concombre, tomates cerises</li>
                    <li> Noix de cajou</li>
                    <li>Coriandre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/poke.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Selon l'historienne de l'alimentation Rachel Laudan, la forme actuelle du poke est devenue populaire vers les années 1970. 
      Elle était à base de poisson cru sans peau, désarêté et en filets, servi avec du sel hawaïen, 
      des algues et de la noix de kukui moulue grillée et rôtie. Cette forme de poke est encore courante dans les îles hawaïennes
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ez4zQr6CSnY" title="YouTube video player" frameborder="0"
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

    @foreach($poissons as $poisson)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$poisson->titre}}</h2>
                <h3>origine : {{$poisson->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$poisson->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$poisson->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$poisson->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_poissons')}}">Ajouter une recette</a>
    </div>
<div>

@endsection