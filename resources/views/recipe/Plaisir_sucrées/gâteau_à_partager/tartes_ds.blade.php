@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Tartes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Tarte Tatin</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>½ pâte feuilletée maison</li>
                    <li>10 à 11 pommes</li>
                    <li>130g de beurre (2x65g)</li>
                    <li>250g de sucre</li>
                    <li>80g d’eau</li>
                    <li> Cannelle en poudre </li>
                    <li> Confiture d’abricot </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/tartetatin.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La tourte retournée est mentionnée en 17901. La Tradition: revue générale des contes, légendes en 1906 cite l'expression 
        «Lorsqu'il arrive que, de deux sœurs, la cadette se marie avant son aînée, on fait manger à celle-ci de la tarte retournée 
        sens dessus dessous, d'où l'expression suivante: A' li ont fait manger de le tarte àrtournée»2.
        À la fin du xixe siècle, la tarte des sœurs Stéphanie (1838-1917) et Caroline Tatin (1847-1911), hôtelières à 
        Lamotte-Beuvron en Sologne, était réputée dans toute la région3. Un manuscrit de l'institutrice Marie Souchon 
        indique qu'elles tiennent la recette de la cuisinière anonyme du comte Alfred Leblanc de Chatauvillard.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JQb9nFIcufs" title="YouTube video player" frameborder="0" 
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

    @foreach($tartes_ds as $tartes_d)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$tartes_d->titre}}</h2>
                <h3>origine : {{$tartes_d->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$tartes_d->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$tartes_d->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$tartes_d->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_tartes_ds')}}">Ajouter une recette</a>
    </div>
<div>

@endsection