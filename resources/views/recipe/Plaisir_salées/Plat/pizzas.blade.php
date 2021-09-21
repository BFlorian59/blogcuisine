@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Pizzas </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Margherita</h2>
        <h3>origine : Italie</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 pâte à pizza</li>
                    <li>Sauce tomate pour pizza</li>
                    <li>Mozzarella</li>
                    <li>Emmental</li>
                    <li>Herbes aromatiques</li>
                    <li>Huile d'olive </li>
                    <li>Poivre</li>
                    <li>Basilic</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/marghrrita.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Il existe plusieurs versions sur l'origine de la pizza Margherita. Pour certains, celle-ci date de 1796-1810. 
      Elle aurait été décrite, dès 1830, par un certain Riccio, dans le livre Napoli, contorni e dintorni.
      En 1866, Francesco De Bouchard, indique l'existence d'une pizza Margherita, dès 1849 : selon lui, elle porterait ce nom en raison 
      de la forme de fleur faite par la mozzarella fondue qui représenterait des pétales. Enfin, la version mythique la plus souvent 
      racontée, indique que le roi Humbert Ier, accompagné de son épouse Marguerite de Savoie (en italien : Margherita di Savoia), voulant 
      reconquérir les Napolitains à sa cause et les intégrer dans l'unité nationale, se rend à Naples le 11 juin 1889. À cette occasion, le
      chef pizzaiolo, Raffaele Esposito, pour honorer leur visite, crée la pizza, qu'il baptise le lendemain « Margherita »,
      aux couleurs du drapeau italien (rouge avec la tomate, verte avec le basilic, blanche avec la mozzarella).
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NfIfXEbfp-s" title="YouTube video player" frameborder="0" 
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

    @foreach($pizzas as $pizza)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$pizza->titre}}</h2>
                <h3>origine : {{$pizza->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$pizza->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$pizza->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$pizza->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
     </div>
        <hr>

   
    
    @endforeach
<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_pizzas')}}">Ajouter une recette</a>
    </div>
<div>

@endsection