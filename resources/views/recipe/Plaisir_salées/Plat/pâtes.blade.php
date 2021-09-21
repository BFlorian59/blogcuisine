@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Pâtes </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Pâtes à la carbonara</h2>
        <h3>origine : Italie</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>400g de spaghettis</li>
                    <li>4 œufs</li>
                    <li>200g de parmesan râpé </li>
                    <li>200g de lardons </li>
                    <li>Sel</li>
                    <li>Poivre du moulin </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/carbonara.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La région du Latium a toujours revendiqué la paternité de cette fameuse recette, mais l'origine réelle de ces « pâtes à la 
        charbonnière » est en fait très discutée et plusieurs versions plus ou moins fantaisistes circulent.
        Selon une légende répandue, le nom de la recette proviendrait des Carbonari, membres d'une société secrète à vocation 
        politique créée au début du xixe siècle. Mais le rapport avec la pasta est en fait assez flou.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hGu2hmir-ic" title="YouTube video player" frameborder="0" 
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

    @foreach($pâtes as $pâte)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$pâte->titre}}</h2>
                <h3>origine : {{$pâte->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$pâte->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$pâte->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$pâte->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_pâtes')}}">Ajouter une recette</a>
    </div>
<div>

@endsection