@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Viandes </h1>
</div>

<div >
    <div class= "titre"> 
        <h2>Shish Tawook</h2>
        <h3>origine : Liban</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Viande de bœuf </li>
                    <li>1 cuillère à café de poivron rouge </li>
                    <li>1 cuillère à café de coriandre et de carvi </li>
                    <li>1 cuillère à café de poivre noir </li>
                    <li>1 cuillère à café de curcuma </li>
                    <li>1 cuillère à café d'ail </li>
                    <li>1 cuillère à café de thym </li>
                    <li>1 cuillère à café de romarin </li>
                    <li>1 cuillère à café de sel </li>
                    <li>1 cuillère à soupe d'huile d'olive</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Shish_Tawook.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Le chich taouk ou taouk chich (turc şiş : « brochette » et tavuk : « poule ») est un plat de la cuisine levantine 
        (libanaise, syrienne, turque, etc.) à base de poulet mariné et de jus de citron. Il peut être consommé en sandwich ou dans 
        une assiette avec d'autres méchouis. Ce plat populaire au Liban, Syrie, et Turquie, l'est devenu aussi en Tunisie et en Algérie. 
        En Grèce, il est connu avec la dénomination de souvlaki.
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bF9ddVndel8" title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>

<hr>

<style>
  .uper {
    margin-top: 40px;
  }
</style> -->

 <div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

    @foreach($vs as $v)
        <div class= "titre"> 
                
                <h2>{{$v->titre}}</h2>
                <h3>origine : {{$v->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$v->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$v->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$v->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_viande')}}">Ajouter une recette</a>
    </div>
<div>

@endsection