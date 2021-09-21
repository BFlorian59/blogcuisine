@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Tartes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> La tarte Bourdaloue</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Pâte sucrée :</li>
                    <li>250 g farine</li>
                    <li>150 g beurre</li>
                    <li>100 g sucre glace</li>
                    <li>1 œuf entier</li>
                    <li>Sel </li>
                    <br>
                    <li>Garniture:</li>
                    <li>400 g poire</li>
                    <li>100 g nappage</li>
                    <li>20 g amande effilées</li>
                    <br>
                    <li>Crème d'amande:</li>
                    <li>100 g beurre</li>
                    <li>100 g sucre</li>
                    <li>100 g poudre amande</li>
                    <li>2 œufs entiers</li>
                    <li>1Arôme amande</li>

                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/bourdaloue.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>La tarte Bourdaloue ne tire pas son nom de Louis Bourdaloue, dont Voltaire parlait comme « 
      le prédicateur des rois et le roi des prédicateurs ». Cette pâtisserie, mélange d'amandes et de poires, 
      tire son nom d'une rue du 9e arrondissement de Paris, où était installé le pâtissier qui la commercialisa vers 1860.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/FL0MEidN2T8" title="YouTube video player" frameborder="0"
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

    @foreach($tartes as $tarte)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$tarte->titre}}</h2>
                <h3>origine : {{$tarte->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$tarte->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$tarte->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$tarte->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_tartes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection