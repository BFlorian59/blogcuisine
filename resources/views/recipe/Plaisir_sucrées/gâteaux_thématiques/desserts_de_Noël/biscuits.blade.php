@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Biscuits </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Biscuits de Noël</h2>
        <h3>origine : Allemagne</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>250g de farine</li>
                    <li>125g de beurre</li>
                    <li>125g de sucre</li>
                    <li>65g de poudre d’amande</li>
                    <li>1 œuf entier + 1 jaune d’œuf</li>
                    <li>1 pincée de levure chimique</li>
                    <li>1 c. à c. de cannelle en poudre</li>
                    <li>1 c. à s. de zestes d’orange/citron</li>
                    <li>15g d’eau de fleur d’oranger</li>
                    <li>1 c. à s. de kirsch</li>
                    <li>Pour la dorure : 2 jaunes d’œufs</li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/noel.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> À l’origine, des biscuits en forme d’étoiles, de cœurs ou encore de triangles étaient préparés par les populations paysannes pendant
       le solstice d’hiver, afin d’éloigner les mauvais esprits et d’assurer à la fois prospérité et fertilité pour l’année suivante.
        Incontournables dans le nord et l’est de la France ainsi qu’en Belgique, au Luxembourg, aux Pays-Bas, en Allemagne ou encore en 
        Suisse, les biscuits de Noël sont associés à la légende de Saint-Nicolas, qui distribuait ces fameux biscuits à dos d’âne aux 
        enfants obéissants.
        Les premiers bonshommes en pain d’épice, qui font partie intégrante des contes de Noël, font quant à eux leur apparition à la 
        cour d’Elizabeth I, au 16ème siècle. En effet, la reine aimait offrir à ses convives des biscuits à leur effigie.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ny0KnoFc4VE" title="YouTube video player" frameborder="0" 
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

    @foreach($biscuits as $biscuit)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$biscuit->titre}}</h2>
                <h3>origine : {{$biscuit->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$biscuit->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$biscuit->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$biscuit->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_biscuits')}}">Ajouter une recette</a>
    </div>
<div>

@endsection