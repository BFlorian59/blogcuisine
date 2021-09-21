@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Thés </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Le thé à la menthe</h2>
        <h3>origine : Maroc</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 l d'eau bouillante </li>
                    <li>3 c à c de thé vert de Chine </li>
                    <li>12 morceaux de sucre </li>
                    <li>1 petite botte de menthe fraîche </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/thémente.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Le thé à la menthe est une boisson chaude réalisée à partir de feuilles de thé et de feuilles de menthe, originaire du Maroc.
       La consommation du thé s'est étendue par la suite dans le reste du Maghreb, mais également en Afrique subsaharienne et en
        Afrique de l'Ouest du fait de la colonisation et des flux de population. On prête à ce breuvage un grand nombre de vertus, 
       notamment toniques et digestives. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iLwAYlWETAI" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>
<div >
    <div class= "titre"> 
        <h2> Le thé vert Matcha</h2>
        <h3>origine :Chine</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>2 grammes de poudre de thé vert Matcha</li>
                    <li>60 millilitres d’eau chaude </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/matcha.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Il semblerait que le thé en poudre fut inventé en Chine durant la dynastie Song (960-1279). 
      La préparation et la consommation de ce thé devint un rituel sous l'influence des bouddhistes Chan, qui le buvaient dans un bol commun en guise de sacrement. 
      Le bouddhisme Chan (aussi connu sous le nom japonais de zen), et avec lui le thé en poudre, fut importé au Japon en 1191 par le moine 
      Eisai. Le thé en poudre fut par la suite oublié en Chine, tandis qu'il devint populaire au Japon. Au xvie siècle, 
      le maître de thé Sen no Rikyū formula les principes du chanoyu, 
      la cérémonie du thé japonaise, et indiqua que le matcha était le thé à utiliser dans ce contexte. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/j3X0_4FcMfQ" title="YouTube video player" frameborder="0" 
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

    @foreach($thés as $thé)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$thé->titre}}</h2>
                <h3>origine : {{$thé->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$thé->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$thé->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$thé->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_thés')}}">Ajouter une recette</a>
    </div>
<div>

@endsection