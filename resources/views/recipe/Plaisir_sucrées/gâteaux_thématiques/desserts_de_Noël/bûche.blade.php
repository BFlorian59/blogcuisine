@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Bûches </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Bûche de Noël au Praliné et Chocolat</h2>
        <h3>origine : Europe</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Pour le biscuit roulé:</li>
                    <li>90g de farine</li>
                    <li>30g de maïzena</li>
                    <li>120g de sucre</li>
                    <li>4 œufs</li>
                    <li>1 c. à s. d’arôme vanille </li>
                    <li>1 pincée de sel</li>
                    <br>
                    <li> Pour le sirop de punchage : </li>
                    <li>100ml d’eau </li>
                    <li>70g de sucre </li>
                    <li>4 c. à s. de rhum brun</li>
                    <br>
                    <li>Pour la crème au beurre pralinée : </li>
                    <li>280g de beurre </li>
                    <li>250g de sucre </li>
                    <li>70g d’eau </li>
                    <li>8 jaunes d’œufs </li>
                    <li>80g de praliné amandes/noisettes </li>
                    <br>
                    <li> Pour la ganache au chocolat : </li>
                    <li>225g de chocolat noir pâtissier </li>
                    <li>130g de crème liquide entière </li>
                    <li>45g de beurre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Bûche.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La bûche de Noël est un gâteau terminant le repas de Noël en France, en Belgique, en Suisse, au Québec, au Nouveau-Brunswick, 
      au Vietnam, au Liban, et généralement dans les pays francophones. Cette tradition culinaire reproduit un autre rite lié à la 
      célébration du solstice d'hiver. 
      Cette coutume est attestée depuis le Moyen Âge et est héritée de divers rites païens. Elle est répandue dans toute l'Europe.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2f8FMra7vt0" title="YouTube video player" frameborder="0"
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

    @foreach($bûche as $bûches)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$bûches->titre}}</h2>
                <h3>origine : {{$bûches->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$bûches->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$bûches->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$bûches->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_bûche')}}">Ajouter une recette</a>
    </div>
<div>

@endsection