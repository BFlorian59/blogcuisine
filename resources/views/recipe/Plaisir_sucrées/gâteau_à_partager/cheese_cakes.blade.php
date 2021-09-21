@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Cheese cakes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Cheesecake New-Yorkais </h2>
        <h3>origine : États-Unis</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Pour la base biscuitée :</li>
                    <li>140g de biscuits « Thé brun » </li>
                    <li>40g de spéculoos</li>
                    <li>90g de beurre </li>
                    <li>20g de sucre</li>
                    <br>
                    <li> Pour l’appareil à cheesecake : </li>
                    <li>540g de fromage à tartiner (philadelphia) </li>
                    <li>360g de crème fraîche épaisse </li>
                    <li>160g de sucre </li>
                    <li>40g de farine </li>
                    <li>5 œufs </li>
                    <li>1 jaune d’œuf</li>
                    <li>1 citron jaune (zeste + jus) </li>
                    <li>1 c. à s. d’arôme vanille </li>
                    <li>½ c. à c. de sel </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/newyorkais.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> C’est la première vague de migrants d'Europe de l'Est qui l'a introduit en Amérique en débarquant à New York. 
      Deux recettes de cheesecake aux États-Unis trouvent leurs origines dans les quartiers des immigrants allemands et anglais, 
      à Philadelphie, et à New York, chez les Juifs et les Italiens (dans une version à base de ricotta).
      La vente de ce cheesecake a été généralisée dans les épiceries souvent juives ashkénazes : les fameux delicatessen. 
      Si New York compte presque autant de cheesecakes que de restaurants, les experts s'accordent 
      à dire que c'est Arnold Reuben, propriétaire du restaurant Turf à Broadway, qui a mis au point la recette moderne en 1929.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HUeosrfNxiM" title="YouTube video player" frameborder="0" 
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

    @foreach($cheese_cakes as $cheese_cake)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$cheese_cake->titre}}</h2>
                <h3>origine : {{$cheese_cake->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$cheese_cake->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$cheese_cake->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$cheese_cake->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_cheese_cakes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection