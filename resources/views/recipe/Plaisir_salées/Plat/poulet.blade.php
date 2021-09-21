@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Poulets </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Poulet Strogonoff</h2>
        <h3>origine : Russie</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>400 gr de blanc de poulet</li>
                    <li>2 champignons</li>
                    <li>50 gr d’oignons</li>
                    <li>1 cornichon</li>
                    <li> 200 gr de farine</li>
                    <li>50 gr de paprika (piment doux) </li>
                    <li>300 gr de sauce demi-glace ou sauce de rôtirôti liée</li>
                    <li>200 gr de crème liquide</li>
                    <li>Huile d’olive</li>
                    <li> Sel</li>
                    <li>Poivre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/stro.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Le stroganoff n’est pas un plat originaire de la cuisine brésilienne. Bien au contraire ! Il s’agit d’un plat de la cuisine russe,
       mais que les Brésiliens apprécient énormément. Ainsi, le stroganoff de poulet (et les multiples autres versions : au bœuf, à la 
       viande hachée, etc.) est devenu un plat tellement consommé dans le pays qu’on le croit maintenant typiquement brésilien. 
       Il faut dire que nous ne suivons probablement pas la recette russe à la lettre.
      Le stroganoff brésilien est tellement répandu que chaque famille a développé sa propre version de la recette en y rajoutant sa 
      touche spéciale, ce qui est super ! Cela nous permet de savourer ce plat réconfortant de plusieurs façons, chacune étant encore 
      plus gourmande que l’autre.
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/N9NULQ2P7Sk" title="YouTube video player" frameborder="0" 
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

    @foreach($poulet as $poulets)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$poulets->titre}}</h2>
                <h3>origine : {{$poulets->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$poulets->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$poulets->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$poulets->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_poulet')}}">Ajouter une recette</a>
    </div>
<div>

@endsection