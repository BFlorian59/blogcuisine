@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Smoothies </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Smoothie</h2>
        <h3>origine : États-Unis</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Bananes  </li>
                    <li>kiwi </li>
                    <li>25 cl de lait de coco </li>
                    <li> glaçons </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Smoothie.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Smoothie ont été commercialisés à la fin des années 1960 par des vendeurs de glace et des magasins diététiques.
       Les ventes de smoothies en magasin et le chiffre d'affaires issus de ces ventes se sont accrus depuis le début des 
      années 2000 aux États-Unis et au sein de l'Union européenne, où la marque Innocent, positionnée sur le secteur premium, est leader. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QTyEdZlVF5Y" title="YouTube video player" frameborder="0" 
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

    @foreach($smoothies as $smoothie)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$smoothie->titre}}</h2>
                <h3>origine : {{$smoothie->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$smoothie->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$smoothie->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$smoothie->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_smoothies')}}">Ajouter une recette</a>
    </div>
<div>

@endsection