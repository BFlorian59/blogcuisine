@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Les conserves traditionnelles </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> conserve de poivrons</h2>
        <h3>origine : Amérique centrale</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>3 poivrons confits  </li>
                    <li>Huile d'olive </li>
                    <li>Vinaigre de vin </li>
                    <li>1 gousse d'ail </li>
                    <li>Thym </li>
                    <li>Laurier </li>
                    <li>Fleur de sel</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/poivrons.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Le piment, petit et pointu, renferme une essence âcre, la capsaïcine, qui lui donne sa saveur, plus ou moins brûlante. 
      Le poivron, quant à lui, est plus gros et doux. 
      Piments et poivrons sont arrivés en Europe au 16ème siècle. On en recensait déjà des dizaines de variétés aux formes et aux couleurs
      très variées. Ce n'est qu'à partir du 18ème siècle que leur culture
      s'est véritablement développée et que pourpre, rouge vif, orange, vert, jaune pâle... ils parent les étals de couleurs chatoyantes.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7jIu2S6Sblo" title="YouTube video player" frameborder="0" 
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

    @foreach($conserves as $conserve)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$conserve->titre}}</h2>
                <h3>origine : {{$conserve->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$conserve->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$conserve->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$conserve->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_conserves')}}">Ajouter une recette</a>
    </div>
<div>

@endsection