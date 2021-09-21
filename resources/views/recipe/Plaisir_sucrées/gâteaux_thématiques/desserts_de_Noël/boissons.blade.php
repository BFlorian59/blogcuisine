@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Boissons </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Vin chaud aux épices</h2>
        <h3>origine : Europe</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 L de vin rouge ou de jus de pomme</li>
                    <li>80 à 100 gr de sucre roux (30gr pour la version à la pomme)</li>
                    <li>1 zeste de citron</li>
                    <li>1 zeste d'orange</li>
                    <li>2 bâtons de canelle</li>
                    <li>2 clous de girofle </li>
                    <li>30 gr de gingembre</li>
                    <li>Une pincée de noix de muscade râpée </li>
                    <li>1 orange </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Vin.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Le premier vin épicé fut le conditum paradoxum élaboré à l'époque de l'Empire romain vers 20 ap. J.- C.2. Sa composition en est 
      donnée dans le Livre I.1. De Re Coquinaria d'Apicius. Du miel était mis à bouillir dans du vin, puis y étaient ajoutées des épices :
       poivre, mastic, nard, laurier, safran, ainsi que des noyaux de dattes torréfiées et des dattes trempées préalablement dans du vin.
        Il s'agit alors de masquer le goût oxydé du vin3. Le tout était 
      ensuite dilué dans du vin de qualité afin que le mélange soit doux. Puis pour le conserver on y jetait ensuite des charbons ardents.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/MSXHlVrPXZo" title="YouTube video player" frameborder="0" 
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

    @foreach($boissons as $boisson)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$boisson->titre}}</h2>
                <h3>origine : {{$boisson->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$boisson->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$boisson->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$boisson->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_boissons')}}">Ajouter une recette</a>
    </div>
<div>

@endsection