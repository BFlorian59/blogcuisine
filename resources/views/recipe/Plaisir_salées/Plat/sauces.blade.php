@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Sauces </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Sauce aux champignons </h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>30g de beurre</li>
                    <li>1/2 oignon </li>
                    <li>Ail </li>
                    <li>250g de champignons </li>
                    <li>1 cuillère soupe farine</li>
                    <li>125ml bouillon </li>
                    <li>250ml de crème</li>
                    <li>Sel poivre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/saucechampignon.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> À l'origine, cette sauce était uniquement servie en accompagnement du gibier, et particulièrement des oiseaux. 
      Ceux-ci étaient découpés pour ôter les plombs et nécessitaient, s'ils étaient vieux et durs, d'être cuits longuement.
        Aujourd'hui, elle peut accompagner des volailles, des viandes blanches ou des pâtes fraîches.
        Elle est crée par Philippe de Mornay dans les année 1600.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/vCHSB5wwvyc" title="YouTube video player" frameborder="0"
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

    @foreach($sauces as $sauce)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$sauce->titre}}</h2>
                <h3>origine : {{$sauce->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$sauce->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$sauce->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$sauce->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_sauces')}}">Ajouter une recette</a>
    </div>
<div>

@endsection