@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Biscuis secs </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Shortbread</h2>
        <h3>origine : Ecosse</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>220g de farine</li>
                    <li>110g de fécule de maïs (maïzena)</li>
                    <li>220g de beurre demi-sel</li>
                    <li>110g de sucre</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Shortbread.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> A l’origine, le Shortbread aurait été fabriqué à base de restes de pâte à pain séchée. Par la suite, 
      la levure fut progressivement remplacée par du beurre. Ce biscuit devint alors un luxe que les gens ordinaires réservaient aux 
      grandes occasions. On en faisait cadeau aux visiteurs à Noël et au Nouvel An. Le petit biscuit rond et doré rappelait le soleil 
      de « Yule », l’ancienne célébration païenne. Pour les mariages, 
      la coutume était de casser un Shortbread au-dessus de la tête de la mariée au seuil de son nouveau foyer.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/vusKrUbiSrc" title="YouTube video player" frameborder="0" 
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

    @foreach($biscuits_secs as $biscuit_sec)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$biscuit_sec->titre}}</h2>
                <h3>origine : {{$biscuit_sec->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$biscuit_sec->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$biscuit_sec->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$biscuits_sec->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_biscuits_secs')}}">Ajouter une recette</a>
    </div>
<div>

@endsection