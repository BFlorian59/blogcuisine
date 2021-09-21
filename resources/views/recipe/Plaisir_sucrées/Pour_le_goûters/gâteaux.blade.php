@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Gâteaux </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Paris-brest</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Pour la pâte à choux :</li>
                    <li>150g de farine</li>
                    <li>100g de beurre</li>
                    <li>125g de lait entier</li>
                    <li>125g d’eau</li>
                    <li>4 œufs</li>
                    <li>5g de sel</li>
                    <li>1 c. à s. de sucre glace</li>
                    <li>Des amandes effilées</li>
                    <li>1 œuf battu pour la dorure</li>
                    <br>
                    <li>Pour la crème mousseline pralinée :</li>
                    <li>500ml de lait entier</li>
                    <li>130g de sucre</li>
                    <li>60g de maïzena</li>
                    <li>4 jaunes d’œufs</li>
                    <li>½ gousse de vanille</li>
                    <li>250g de beurre</li>
                    <li>140g de praliné amandes/noisettes</li>

                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Paris-brest.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Ce gâteau en forme de roue de vélo rend hommage à la course cycliste Paris-Brest-Paris. Sa création est attribuée à un pâtissier
       situé sur le passage de la course, parmi lesquels : Louis Durand, de Maisons-Laffitte, qui l'aurait conçu en 1909 ; Monsieur 
       Bauget, également de Maisons-Laffitte, mais en 1891 ; d'autres sources citent simplement un pâtissier de la banlieue parisienne 
       qui l'aurait créé en 1891 ; enfin, un pâtissier de Chartres du nom de Gerbet.
        Selon certaines sources, Durand l'aurait créé en 1909 sous la forme d'un éclair, et c'est un autre pâtissier de la banlieue 
        ouest de Paris qui lui aurait donné sa forme circulaire dans les années 1940. Selon d'autres sources, c'est Durand qui lui 
        aurait donné sa forme de roue de bicyclette, en se basant sur une pâtisserie créée antérieurement : une pâtisserie en forme de 
        couronne de lauriers (en référence à celle qui est décernée au vainqueur de la course) créée par un pâtissier de Brest ou une 
        pâtisserie de forme oblongue.
        La même recette apparaît sous le nom paris-nice en 1910 dans le Traité de pâtisserie moderne d'Émile Darenne et Émile Duval.
        En 1930, Paul Durand, fils de Louis, a tenté de déposer un brevet sur la création de son père, mais la diffusion de la pâtisserie
         était déjà si large que sa demande fut rejetée.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_710LxPREYc" title="YouTube video player" frameborder="0" 
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

    @foreach($gâteaux as $gâteau)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$gâteau->titre}}</h2>
                <h3>origine : {{$gâteau->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$gâteau->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$gâteau->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$gâteau->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_gâteaux')}}">Ajouter une recette</a>
    </div>
<div>

@endsection