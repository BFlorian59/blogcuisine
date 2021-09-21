@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Cakes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Gesundheitskuchen </h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>150g de beurre</li>
                    <li>225g de sucre </li>
                    <li>3 œufs</li>
                    <li>150g de lait </li>
                    <li>300g de farine</li>
                    <li>1 sachet de levure chimique </li>
                    <li>1 sachet de sucre vanillé </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/gesundheitskuchen.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Le terme de gesundheitskuchen vient de l’alsacien gesundheits signifiant «santé» et kuchen «gâteau». C’est un gâteau de ménage 
      qui est apparu au cours du XIXe siècle en Alsace et qui fut adopté par la majorité des foyers alsaciens. Facile à préparer, 
      il consiste à battre du beurre mou en additionnant progressivement d’autres ingrédients (lait tiède, sucre, farine, œufs). 
      Nourrissant et bon marché, il pouvait se conserver plusieurs jours et être proposé à la moindre visite à l’improviste.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/75hBgFe06X8" title="YouTube video player" frameborder="0" 
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

    @foreach($cakes as $cake)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$cake->titre}}</h2>
                <h3>origine : {{$cake->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$cake->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$cake->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$cake->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_cakes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection