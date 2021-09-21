@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Cafés </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Cafés viennois</h2>
        <h3>origine : Autriche</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Café Expresso : 48 centilitre(s)  </li>
                    <li>Pour la crème : </li>
                    <li>Crème liquide entière : 15 centilitre(s)  </li>
                    <li>Sucre glace : 15 gramme(s)  </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/viennois.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>La légende veut que les viennois auraient retrouvé, lors de la libération après la fin du second siège turc en 1683,
       des sacs avec des grains étranges, qu'ils ont d'abord cru être du fourrage pour les chameaux et ont voulu brûler. 
       Le Roi Jean III Sobieski les aurait remis à son officier et interprète, Jerzy Franciszek Kulczycki (en). 
       Ce dernier aurait alors pris les sacs et fondé le premier café à Vienne. Cette histoire, cependant, est inventée ; 
       le piariste Gottfried Uhlich 
      l’a publiée en 1783 dans sa chronique Histoire du second siège turc de Vienne, à l’occasion de la commémoration de ses 100 ans7. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5BPzNpDSh0w" title="YouTube video player" frameborder="0"
           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

<div >
    <div class= "titre"> 
        <h2> Latté macchiato</h2>
        <h3>origine : Italie </h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>33 cl de lait  </li>
                    <li>15 cl de café </li>
                    <li>3 cuillères à soupe de chocolat en poudre (type nesquick, poulain)  </li>
                    <li>1 sachet de sucre vanillé  </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/macchiato.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>
    Le Macchiato appartient au panthéon du Barista et de l’histoire du café à l’italienne absorbé par la Seconde Vague puis la 
    Third Wave. Il est né dans l’Italie du Boom Économique et a rapidement, comme le Cappuccino, conquis le coeur et le palais des 
    Italiens et participé à la Dolce Vita caféinée italienne. Lorsque, à partir des années 70, les Étasuniens de la Côte Ouest ont 
    renouvelé et réinterprété la culture italienne du café fondée sur l’espresso,
     ils ont rapidement adopté et la terminologie et les recettes italiennes, en les musclant le plus souvent.
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/T7NZrw3-eLY" title="YouTube video player" frameborder="0" 
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

    @foreach($cafés as $café)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$café->titre}}</h2>
                <h3>origine : {{$café->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$café->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$café->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$café->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_cafés')}}">Ajouter une recette</a>
    </div>
<div>

@endsection