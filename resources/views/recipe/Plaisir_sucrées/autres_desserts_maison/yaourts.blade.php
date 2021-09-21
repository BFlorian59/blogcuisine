@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Yaourts </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Tarte au yaourt </h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>125 gr de sucre avec 3 œufs</li>
                    <li>500 gr de yaourt Grec ou nature </li>
                    <li>75 gr d'amidon de maïs </li>
                    <li>1 cuillère à soupe de vanille </li>
                    <li>Beurrer un moule</li>
                    <li>1 gousse de vanille </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/yaourt.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Les premières recettes de gâteau au yaourt apparaissent 
      vers 1950 en France, après la généralisation de la consommation de yaourt en 1945 après la fin de la Seconde Guerre mondiale.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7cNSQHsiWfs" title="YouTube video player" frameborder="0" 
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

    @foreach($yaourts as $yaourt)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$yaourt->titre}}</h2>
                <h3>origine : {{$yaourt->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$yaourt->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$yaourt->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$yaourt->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_yaourts')}}">Ajouter une recette</a>
    </div>
<div>

@endsection