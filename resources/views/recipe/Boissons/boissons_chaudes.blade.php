@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Boissons chaudes </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Chocolat chaud aux épices</h2>
        <h3>origine : Amérique du Sud</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>75 cl de lait </li>
                    <li>25 cl de crème fraîche liquide </li>
                    <li>150 gr de chocolat minimum 60% de cacao </li>
                    <li>1 CàT rase de vanille poudre  </li>
                    <li>1 CàT rase d'anis vert </li>
                    <li>1 CàT rase de cannelle poudre </li>
                    <li>2  clous de girofle </li>
                    <li>3 capsules de cardamone </li>
                    <li>1 étoile de badiane,</li>
                    <li>1 tours de moulin à poivre</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/chocolat_epices.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Bien que disponible partout dans le monde, le chocolat est en réalité un produit exotique ! Il nous vient en effet des régions tropicales d’Amérique du Sud.
        Les premiers cacaoyers ont été découverts par les Aztèques et les Mayas, il y a plus de 4 000 ans. Rapidement, ces peuples ont commencé à 
        utiliser le cacao dans des infusions avec du miel, des épices et de la vanille.
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Y1bYJTwGn_I" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>

<hr>

<div >
    <div class= "titre"> 
        <h2> Masala Chaï</h2>
        <h3>origine : Inde</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>2.5 càs de thé noir </li>
                    <li>1 cannelle </li>
                    <li>4 cardamones </li>
                    <li>4 clous de girofle  </li>
                    <li>6 grains de poivres</li>
                    <li>1 étoile anisée </li>
                    <li>0.5 càc de graines de fenouil </li>
                    <li>1/3 càc de gingembre en poudre </li>
                    <li>sucre</li>
                    <li>2 verres d'eau</li>
                    <li>1 verre de lait</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/chai.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Cette précision est importante car chai veut tout simplement dire thé en hindi ! C’est un dérivé du mandarin cha. 
      C’est d’ailleurs depuis la Chine que la culture du thé arrive en Inde en 1830, apportée par les colons britanniques inquiets du monopole chinois sur la production du thé. 
      L’ancêtre du masala chai est alors une boisson aux épices, dont l’on peut retracer l’origine dans des textes ayurvédiques. 
      Le mélange d’épices est tout simplement directement infusé dans de l’eau bouillante.
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bZrt4p-fgD8" title="YouTube video player" frameborder="0" 
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

    @foreach($boissons_chaudes as $boissons_chaude)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$boissons_chaude->titre}}</h2>
                <h3>origine : {{$boissons_chaude->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$boissons_chaude->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$boissons_chaude->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$boissons_chaude->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_boissons_chaudes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection